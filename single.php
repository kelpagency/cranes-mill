<?php
/**
 * The Template for displaying all single posts
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context = Timber::context();
$post = Timber::get_post();
$context["post"] = $post;

if (post_password_required($post->ID)) {
  Timber::render("pages/password.twig", $context);
} else {
  Timber::render(
    [
      "pages/single-" . $post->ID . ".twig",
      "pages/single-" . $post->post_type . ".twig",
      "pages/single-" . $post->slug . ".twig",
      "pages/single.twig",
    ],
    $context
  );
}
