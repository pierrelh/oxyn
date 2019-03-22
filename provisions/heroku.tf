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
  name   = "stagingoxyn"
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
  name   = "productionoxyn"
  region = "eu"

  config_vars {
    FOOBAR = "baz"
  }

  buildpacks = [
    "heroku/php",
  ]
}

# Create a Heroku pipeline
resource "heroku_pipeline" "oxynpipeline" {
  name = "oxynpipeline"
}

# Couple apps to different pipeline stages
resource "heroku_pipeline_coupling" "staging" {
  app      = "${heroku_app.staging.name}"
  pipeline = "${heroku_pipeline.oxynpipeline.id}"
  stage    = "staging"
}

resource "heroku_pipeline_coupling" "production" {
  app      = "${heroku_app.production.name}"
  pipeline = "${heroku_pipeline.oxynpipeline.id}"
  stage    = "production"
}
