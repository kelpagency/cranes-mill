<?php

// Load Composer dependencies.
require_once __DIR__ . '/vendor/autoload.php';

// Setup theme base
require_once __DIR__ . '/src/theme-setup.php';

Timber\Timber::init();

// Sets the directories (inside your theme) to find .twig files.
Timber::$dirname = [ 'templates', 'views' ];

new StarterSite();

// Setup ACF
require_once __DIR__ . '/src/acf-setup.php';

// Theme block settings
require_once __DIR__ . '/src/theme-blocks.php';

// Global Theme scripts and stylesheets
require_once __DIR__ . '/src/theme-scripts.php';

// Custom WP Admin stuff
require_once __DIR__ . '/src/admin.php';