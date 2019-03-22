provider "heroku" {
  email   = "${var.heroku_email}"
  api_key = "${var.heroku_api_key}"
}

variable "heroku_api_key" {
  type = "string"
}

variable "heroku_email" {
  type = "string"
}

# Create apps
resource "heroku_app" "review" {
  name   = "review Oxyn"
  region = "eu"

  config_vars {
    FOOBAR = "baz"
  }

  buildpacks = [
    "heroku/php",
  ]
}

resource "heroku_app" "staging" {
  name   = "staging Oxyn"
  region = "eu"

  config_vars {
    FOOBAR = "baz"
  }

  buildpacks = [
    "heroku/php",
  ]
}

resource "heroku_app" "production" {
  name   = "production Oxyn"
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
resource "heroku_pipeline_coupling" "review" {
  app      = "${heroku_app.review.name}"
  pipeline = "${heroku_pipeline.oxynpipeline.id}"
  stage    = "review"
}

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
