<?php

/**
 * Plugin Name:       Hello world header
 * Plugin URI:        https://github.com/zenixbe/test-github-sync
 * Description:       A plugin to automatically update GitHub, Bitbucket or GitLab hosted plugins and themes. It also allows for remote installation of plugins or themes into WordPress.
 * Version:           10.0.0
 * Author:            Andy Fragen
 * License:           MIT
 * Text Domain:       helloworldheader
 * GitHub Plugin URI: https://github.com/zenixbe/test-github-sync
 */



// Function to output "Hello World" text
function add_hello_world_text()
{
    echo '<div id="hello-world-text" style="margin-top: 100px;">Hello World sync</div>';
}

// Hook the function to an action that runs before the header
add_action('wp_body_open', 'add_hello_world_text');

// Function to add custom CSS
function hello_world_custom_styles()
{
    echo '<style>#hello-world-text { margin-top: 100px; color:white; }</style>';
}

// Hook for adding custom styles
add_action('wp_head', 'hello_world_custom_styles');
