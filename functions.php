<?php

function asbe_theme_init()
{
    load_theme_textdomain('asbe');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'asbe_theme_init');

function asbe_theme_assets()
{
    if (is_page()) {
        $getPage = basename(get_page_template());
        if ($getPage == 'coming-soon-landing-page.php') {
            //  load css

            wp_enqueue_style(
                'animate-css',
                get_theme_file_uri('assets/css/animate.css'),
                null,
                1.0
            );
            wp_enqueue_style(
                'icomoon-css',
                get_theme_file_uri('assets/css/icomoon.css'),
                null,
                1.0
            );
            wp_enqueue_style(
                'bootstrap-css',
                get_theme_file_uri('assets/css/bootstrap.css'),
                null,
                1.0
            );
            wp_enqueue_style(
                'style-css',
                get_theme_file_uri('assets/css/style.css'),
                null,
                1.0
            );
            wp_enqueue_style(
                'asbe-style',
                get_stylesheet_uri(),
                null,
                time() + 1
            );

            // load js

            wp_enqueue_script(
                'easing-js',
                get_theme_file_uri('assets/js/jquery.easing.1.3.js'),
                ['jquery'],
                null,
                true
            );
            wp_enqueue_script(
                'bootstrap-js',
                get_theme_file_uri('assets/js/bootstrap.min.js'),
                ['jquery'],
                null,
                true
            );
            wp_enqueue_script(
                'waypoints-js',
                get_theme_file_uri('assets/js/jquery.waypoints.min.js'),
                ['jquery'],
                null,
                true
            );
            wp_enqueue_script(
                'simplyCountdown-js',
                get_theme_file_uri('assets/js/simplyCountdown.js'),
                ['jquery'],
                null,
                true
            );
            wp_enqueue_script(
                'main-js',
                get_theme_file_uri('assets/js/main.js'),
                ['jquery'],
                null,
                true
            );

            $year = get_post_meta(get_the_ID(), 'year', true);
            $month = get_post_meta(get_the_ID(), 'month', true);
            $day = get_post_meta(get_the_ID(), 'day', true);

            wp_localize_script('main-js', 'evenet_data', [
                'year' => $year,
                'month' => $month,
                'day' => $day,
            ]);
        }else{
            wp_enqueue_style(
                'asbe-style',
                get_stylesheet_uri(),
                null,
                time() + 1
            );
        }
    }
}

add_action('wp_enqueue_scripts', 'asbe_theme_assets');

function asbe_sidebars()
{
    register_sidebar([
        'name' => __('Footer Left Sidebar', 'asbe'),
        'id' => 'footer_left',
        'before_widget' => '<section id="%1$s" class="widget text-left %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ]);

    register_sidebar([
        'name' => __('Footer Right Sidebar', 'asbe'),
        'id' => 'footer_right',
        'before_widget' => '<section id="%1$s" class="widget text-right %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ]);
}

add_action('widgets_init', 'asbe_sidebars');

function asbe_landing_page_style()
{
    $thumbnailurl = get_the_post_thumbnail_url(null, 'large'); ?>
    <style>
        .side-bar {
            background-image: url(<?php echo $thumbnailurl; ?>);
            padding-top: 50px;
        }
    </style>

<?php
}
add_action('wp_head', 'asbe_landing_page_style');
