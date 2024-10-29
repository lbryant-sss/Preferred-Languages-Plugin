<?php
/**
 * Plugin Name: Preferred Languages.
 * Version:     2.3.0
 * @package PreferredLanguages
 */

/**
 * Plugin functions.
 */
require_once __DIR__ . '/inc/class-preferred-languages-noop-translations.php';
require_once __DIR__ . '/inc/functions.php';

// We need to load before plugins_loaded, see https://core.trac.wordpress.org/ticket/58546.
preferred_languages_boot();
