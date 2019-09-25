provider "google" {
  credentials = "${var.google_credential}"
  project     = "watchful-gear-247211"
  region      = "eu"
}

variable "google_credential" {
  type = "string"
}