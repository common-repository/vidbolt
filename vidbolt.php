<?php
/**
 * Plugin Name: Vidbolt
 * Plugin URI: http://wordpress.org/plugins/vidbolt/
 * Description: Share and discuss videos with Vidbolt. Example: [vidbolt id="5aee0d4f93a0d1ea41e76f981c1626dc"]
 * Version: 1.2
 * Author: Vidbolt
 * Author URI: http://vidbolt.com
 * License: GPL2+
 */


class Vidbolt_WP {

    function vidbolt_wp() {
        add_shortcode( 'vidbolt', array( $this, 'shortcode' ) );
    }

    function shortcode( $atts = false ) {

        // parse arguments
        extract( shortcode_atts( array(
            "id" => false
        ), $atts) );

        // remove unsafe stuff like html code
        $id = preg_replace('/[^0-9a-zA-Z]/', '', trim($id));

        // check id
        if ( !$id )
            return __( 'You must provide a Vidbolt embed ID.', 'vidbolt_wp' );

        return sprintf( '<script type="text/javascript" data-vidbolt src="//beta.vidbolt.com/dist/vidbolt.js" data-vid="%s"></script>', $id );

    }

}

$vidbolt_wp = new Vidbolt_WP;

