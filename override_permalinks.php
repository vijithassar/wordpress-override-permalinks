<?php
/**
 * @package: Override Permalinks
 * @version 0.1
 */
/*
Plugin Name: Override Permalinks
Plugin URI: http://www.vijithassar.com
Description: Replace WordPress permalinks with arbitrary URLs
Author: Vijith Assar
Version: 0.1
Author URI: http://www.vijithassar.com/
*/

function override_permalink($permalink) {
	$override = get_post_meta(get_the_id(), 'permalink_override', true);
	if ($override) {
		return $override;
	} else {
  	return $permalink;
	}
}

add_filter('the_permalink_rss', 'override_permalink');
add_filter('the_permalink', 'override_permalink');
