provider "heroku" {
  email   = "${var.heroku_email}"
  api_key = "${var.heroku_api_key}"
}

# Déclaration des variables que nous utiliserons
variable "heroku_api_key" {
  type = "string"
}

variable "heroku_email" {
  type = "string"
}

# Create new app
resource "heroku_app" "staging" {
  name   = "stagingchat"
  region = "eu"

  config_vars {
    FOOBAR = "baz"
  }

  buildpacks = [
    "heroku/php",
  ]
}

# Create new app
resource "heroku_app" "production" {
  name   = "productionchat"
  region = "eu"

  config_vars {
    FOOBAR = "baz"
  }

  buildpacks = [
    "heroku/php",
  ]
}

# Create a Heroku pipeline
resource "heroku_pipeline" "chatpipeline" {
  name = "chatpipeline"
}

# Couple apps to different pipeline stages
resource "heroku_pipeline_coupling" "staging" {
  app      = "${heroku_app.staging.name}"
  pipeline = "${heroku_pipeline.chatpipeline.id}"
  stage    = "staging"
}

resource "heroku_pipeline_coupling" "production" {
  app      = "${heroku_app.production.name}"
  pipeline = "${heroku_pipeline.chatpipeline.id}"
  stage    = "production"
}
