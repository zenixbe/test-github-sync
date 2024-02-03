<?php

/**
 * Plugin Name: Hello World Header
 * Description: Adds "Hello World" text before the header on every page.
 * Version: 1.0
 * Author: Your Name
 * Plugin URI: https://github.com/zenixbe/test-github-sync
 */

// Function to output "Hello World" text
function add_hello_world_text()
{
    echo '<div id="hello-world-text" style="margin-top: 100px;">Hello World</div>';
}

// Hook the function to an action that runs before the header
add_action('wp_body_open', 'add_hello_world_text');

// Function to add custom CSS
function hello_world_custom_styles()
{
    echo '<style>#hello-world-text { margin-top: 100px; }</style>';
}

// Hook for adding custom styles
add_action('wp_head', 'hello_world_custom_styles');
