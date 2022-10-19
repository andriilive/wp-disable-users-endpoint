<?php
/**
 * Plugin Name:  WP disable /users/ api endpoint
 * Plugin URI:   https://github.com/andriilive/wp-disable-users-endpoint
 * Description:  Completely and for real disables WordPress REST-API &amp; `/users/` api endpoint
 * Version:      0.1.0
 * Author:       DigitalAndy
 * Author URI:   https://github.com/andriilive
 * License:      Apache License 2.0
 *
 */

/**
 * Adjust API endpoint availability to hide user info
 */
function my_api_endpoint_setup( $endpoints ) {
    if ( isset( $endpoints['/wp/v2/users'] ) ) {
        unset( $endpoints['/wp/v2/users'] );
    }
    if ( isset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] ) ) {
        unset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] );
    }
    return $endpoints;
}
add_filter( 'rest_endpoints', 'my_api_endpoint_setup' );