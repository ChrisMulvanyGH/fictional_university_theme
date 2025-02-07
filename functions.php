<?php

// Create our custom function university_files
function university_files() {
    // From within this function you can add as many .css or .js files that you want to use.

    // To call a stylesheet or .css file, it looks for 2 parameters 1st a name for the stylesheet, 2nd a location that points to the file.
    wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');  
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');  
    wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
    /**
     * Note: For the second parameter we use a WP function here to get the 'style.css' file. Later we will point to locations of files.
     * If you wished to add other Stylesheet files you would simply copy the line above for each file with the necessary parameters.
     * If you wish to add a JavaScrip file(s) you would simply copt the line above and change 'wp_enqueue_style' to 'wp_enqueue_script'.
     */
}

// Call out custom function university_files
add_action('wp_enqueue_scripts', 'university_files');
// Add two parameters - The first specifies scripts such as .css or .js files.  The 2nd specifies a function to run that we create above.

function university_features() {
    // When you want to enable a feature for your theme you call the following function
    add_theme_support('title-tag');
    // There are all sorts of features you can add with this function so we need to tell WP which specific feature(s) we are interested in.
}

add_action('after_setup_theme', 'university_features');