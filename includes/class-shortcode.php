<?php
/*
* Shortcode for display google map
*/

function register_shortcode_gmap($atts, $content = null) {
    extract(
        shortcode_atts(
            array(
                "align" => 'center',
                "width" => '600',
                "height" => '350',
                "address" => '',
                "info_window" => 'A',
                "zoom" => '14',
                "companycode" => '',
                "maptype" => 'm' 
            ), 
            $atts
        )
    );

    $query_string = 'q=' . esc_attr($address) . '&cid=' . esc_attr($companycode) . '&t=' . esc_attr($maptype) . '&center=' . esc_attr($address);
    
    return '<div class="bg-map"><iframe align="'.esc_attr($align).'" width="'.esc_attr($width).'" height="'.esc_attr($height).'" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?&'.esc_attr($query_string).'&output=embed&z='.esc_attr($zoom).'&iwloc='.esc_attr($info_window).'&visual_refresh=true"></iframe></div>';
    }
	add_shortcode("map_marker", "register_shortcode_gmap");
?>