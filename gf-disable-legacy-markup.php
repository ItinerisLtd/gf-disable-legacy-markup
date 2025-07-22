<?php
/**
 * Plugin Name: Gravity Forms Disable Legacy Markup
 * Plugin URI:  https://www.itineris.co.uk/
 * Description: Forcibly disable legacy markup on all Gravity Forms.
 * Version:     0.1.0
 * Author:      Itineris Limited
 * Author URI:  https://www.itineris.co.uk/
 * Text Domain: gf-disable-legacy-markup
 */

declare(strict_types=1);

namespace Itineris\GFDisableLegacyMarkup;

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

add_filter('gform_enable_legacy_markup', '__return_false');
