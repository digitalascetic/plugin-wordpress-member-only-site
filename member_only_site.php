<?php
/**
 * @package Member only site
 * @version 1.0.0
 */
/*
Plugin Name: Member only site
Description: Simple plugin to restrict access to wordpress site for only members logged in, otherwise redirect to login page
Author: Eduard Deza
Version: 1.0.0
*/


function member_only_site( ) {
    if ( ! is_user_logged_in( ) ) {
        auth_redirect();
    }
}

add_action( 'wp', 'member_only_site' );

