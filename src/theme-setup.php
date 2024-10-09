<?php

use Timber\Site;

/**
 * Class StarterSite
 */
class StarterSite extends Site {
	public function __construct() {
		add_action( 'after_setup_theme', array( $this, 'theme_supports' ) );
		
		add_action('init', [$this, 'register_widgets']);
		add_action('init', [$this, 'register_menus']);

		add_filter( 'timber/context', array( $this, 'add_to_context' ) );
		add_filter( 'timber/twig', array( $this, 'add_to_twig' ) );
		add_filter( 'timber/twig/environment/options', [ $this, 'update_twig_environment_options' ] );

		parent::__construct();
	}

	public function register_widgets()
	{
		register_sidebar([
			'name' => 'Footer',
			'id' => 'footer_widgets',
			'before_widget' => '<div class="footer-widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		]);
	}
	
	public function register_menus()
	{
		register_nav_menus([
			'header_nav' => 'Header Nav',
			'footer_nav' => 'Footer Nav',
		]);
	}

	/**
	 * This is where you add some context
	 *
	 * @param string $context context['this'] Being the Twig's {{ this }}.
	 */
	public function add_to_context( $context ) {
		$context['header_menu'] = Timber::get_menu('header_nav');
		$context['footer_menu'] = Timber::get_menu('footer_nav');
		$context['site'] = $this;
		$context['footer_widgets'] = Timber::get_widgets('footer_widgets');
		$context['logo'] = Timber::get_post(get_theme_mod('custom_logo'));

		return $context;
	}

	public function theme_supports() {
		add_theme_support('align-wide');
		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		add_theme_support('responsive-embeds');
		add_theme_support('wp-block-styles');
		add_theme_support('customize-selective-refresh-widgets');
		add_theme_support("woocommerce");
		add_theme_support('custom-logo', [
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		]);
		add_theme_support('html5', [
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		]);
		add_theme_support('menus');
		add_theme_support('editor-styles');
	}

	public function add_to_twig( $twig ) {
		/**
		 * Required when you want to use Twig’s template_from_string.
		 * @link https://twig.symfony.com/doc/3.x/functions/template_from_string.html
		 */
		// $twig->addExtension( new Twig\Extension\StringLoaderExtension() );
		// $twig->addFilter( new Twig\TwigFilter( 'myfoo', [ $this, 'myfoo' ] ) );

		return $twig;
	}

	function update_twig_environment_options( $options ) {
			// $options['autoescape'] = true;
			return $options;
	}
}

add_filter( 'gform_default_styles', function( $styles ) {
		return '{"theme":"orbital","inputSize":"md","buttonPrimaryBackgroundColor":"#275ccb","buttonPrimaryColor":"#fff"}';
} );