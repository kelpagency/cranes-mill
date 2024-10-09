<?php
/* Template Name: Design System */

$context = Timber::context();
$post = $context["post"];

if (post_password_required($post->ID)) {
  Timber::render("pages/password.twig", $context);
} else {
  Timber::render("pages/design-system.twig", $context);
}
