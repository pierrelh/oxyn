resource "heroku_addon" "cloudinary_staging" {
  app = "${heroku_app.staging.name}"
  plan = "cloudinary:Starter"
}

resource "heroku_addon" "cloudinary_production" {
  app = "${heroku_app.production.name}"
  plan = "cloudinary:Starter"
}
