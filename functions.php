<?php

// Create our custom function university_files
function university_files() {
    // From within this function you can add as many .css or .js files that you want to use.

    // To call a stylesheet or .css file, it looks for 2 parameters 1st a name for the stylesheet, 2nd a location that points to the file.
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());  
    /**
     * Note: For the second parameter we use a WP function here to get the 'style.css' file. Later we will point to locations of files.
     * If you wished to add other Stylesheet files you would simply copy the line above for each file with the necessary parameters.
     * If you wish to add a JavaScrip file(s) you would simply copt the line above and change 'wp_enqueue_style' to 'wp_enqueue_script'.
     */
}

// Call out custom function university_files
add_action('wp_enqueue_scripts', 'university_files');
// Add two parameters - The first specifies scripts such as .css or .js files.  The 2nd specifies a function to run that we create above.