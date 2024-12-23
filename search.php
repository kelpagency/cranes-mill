<?php
/**
 * Search results page
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */

$context = Timber::context();
$context['title'] =
  'Search results for <mark>' . get_search_query() . '</mark>';

Timber::render('archives/search.twig', $context);
