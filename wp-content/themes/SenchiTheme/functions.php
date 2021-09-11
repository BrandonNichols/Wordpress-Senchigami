<?php

//Senchigami Styles
if(!function_exists('senchiStyles')){
    function senchiStyles(){
        $template_dir =  get_template_directory_uri();

        wp_enqueue_style('fontawesome', $template_dir .'/assets/css/fontawesome-all.css', [], '5.15.3');
        wp_enqueue_style('senchigami-style', $template_dir .'/dist/app.css', [], false);

        $header_roboto_condensed = function() {
            $font_url = add_query_arg(
                'family',
                urlencode('Roboto:700'),
                '//fonts.googleapis.com/css'
            );

            return $font_url;
        };

        wp_enqueue_style('roboto-condensed-fonts', $header_roboto_condensed(), [], $css_version);
    }
    add_action('wp_enqueue_scripts', 'senchiStyles');
}

add_theme_support('menus');

register_nav_menu('header_menu',  esc_html__('Header Menu'));

//senchigami scripts
if(!function_exists('senchiScripts')){
    function senchiScripts(){
        wp_register_script('yt-api', "https://www.youtube.com/iframe_api", [], false, true);
        wp_register_script("testimonials", get_template_directory_uri() .'/src/app.js', [], false, true);
        wp_register_script('mobile', get_template_directory_uri() .'/src/mobile.js', [], false, true);
        wp_enqueue_script('yt-api');
        wp_enqueue_script("testimonials");
        wp_enqueue_script('mobile');
        
        if(is_page('live')){
            wp_register_script('axios', "https://unpkg.com/axios/dist/axios.min.js", [], false, true);
            wp_register_script("twitch-api", get_template_directory_uri() .'/src/twitch-api.js', ['axios'], false, true);
            wp_localize_script( "twitch-api", 'TWITCH_SECURITY_KEYS', array(
                'token' => $_ENV['TWITCH_TOKEN'],
                'id' => $_ENV['CLIENT_ID']
            ) );
            wp_register_script("twitch-embed", "https://embed.twitch.tv/embed/v1.js", [], false, true);
            wp_enqueue_script("twitch-embed");
            wp_enqueue_script("twitch-api");
            wp_enqueue_script('axios');
        }
        
    }

    add_action("wp_enqueue_scripts", 'senchiScripts');
}