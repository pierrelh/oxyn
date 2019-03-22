# Create a database, and configure the app to use it
resource "heroku_addon" "database_testing" {
  app  = "${heroku_app.testing.name}"
  plan = "heroku-postgresql:hobby-dev"
}

resource "heroku_addon" "database_staging" {
  app  = "${heroku_app.staging.name}"
  plan = "heroku-postgresql:hobby-dev"
}

resource "heroku_addon" "database_prod" {
  app  = "${heroku_app.production.name}"
  plan = "heroku-postgresql:hobby-dev"
}
