<?php
/*
Plugin Name: Simple Reading Time Estimator
Description: Displays estimated reading time at the top of posts.
Version: 1.0
Author: Harshita Narang
*/

function srt_add_reading_time($content) {
    if (is_single()) {
        $word_count = str_word_count(strip_tags($content));
        $reading_time = ceil($word_count / 200);
        return "<p><strong>Estimated Reading Time: {$reading_time} min(s)</strong></p>" . $content;
    }
    return $content;
}

add_filter('the_content', 'srt_add_reading_time');
?>
