<?php

    /**
     * Functions used by Grossly_Endearing 
     */

    function ge_enqueue_styles( ) {

    }

    function ge_enqueue_scripts( ) {
        wp_enqueu_script('ge-script', )
    }

    function ge_convert_to_module($tag, $handle, $source) {
        if(strpos($handle, 'ge_script')) 
            $tag = '<script src="'.$source.'"type="module"></script>';
        return $tag;
    }

    add_filter('show_admin_bar', '__return_false'); 

    function ge_slider_enqueue( ) {
        wp_enqueue_script(
            'ge-slider',
            plugins_url('/js/slider.js', __FILE__),
            array(),
            wp_get_theme( )->get('Version'),
            true
        );
    }

    function ge_slider_create_group($query, $css) {
        if($query->has_posts()) {
            echo "
            <div class='ge-slider' style=".$css.">
                <div class='arrow select-left'></div>
                <ul>
            ";
            while($query->has_posts()) {
                echo '<li>';
                $query->the_post( );
                echo "
                    </li><ul>
                    <div class='arrow select-right'></div>
                    </div>
                ";
            }
        }
    }

    add_action('wp_enqueue_scripts', 'ge_slider_enqueue');

?>