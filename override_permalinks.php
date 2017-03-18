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

function external_url($permalink) {
	$external_permalink = get_post_meta(get_the_id(), 'external_url', true);
	if ($external_url) {
		return $external_url;
	} else {
  	return $permalink;
	}
}

add_filter('the_permalink_rss', 'external_url');
add_filter('the_permalink', 'external_url');
