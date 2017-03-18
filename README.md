# Overview

This plugin overrides the permalink assigned by WordPress with a specified URL, which will then replace the default permalink in loops and feeds.

# Installation

Upload this file to your wp-contents/plugins directory and then enable the plugin from the plugin admin panel.

# Usage

Add a [custom field](https://codex.wordpress.org/Custom_Fields) to the post. The custom field's key should be `external_url` and the value should be the new URL that will replace the WordPress default permalink.

# Alternatives

This plugin is an *extremely* lightweight version of functionality that can also be found in [External Permalinks](https://wordpress.org/plugins-wp/external-permalinks/) and [External Permalinks Redux](https://wordpress.org/plugins-wp/external-permalinks-redux/).