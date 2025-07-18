<?php
/**
 * Plugin Name: Hello Aditya Shortcode
 * Plugin URI: https://github.com/adityapratap/wp-hello-shortcode
 * Description: A simple shortcode plugin that says Hello.
 * Version: 1.0
 * Author: Aditya Singh
 */

function aditya_hello_shortcode() {
    return "<p>Hello! This is Aditya’s first shortcode plugin.</p>";
}

add_shortcode('hello_aditya', 'aditya_hello_shortcode');
