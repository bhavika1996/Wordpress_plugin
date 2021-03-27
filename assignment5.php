<?php
/*
Plugin Name: Assignment 5 Plugin
*/

function title(){
    echo "Assignment 5 - Plugins</br>";
}

add_action('wp_head','title');

// PART-1

function count_filter($post){
    echo $post;
    return "Word Count : ".str_word_count($post);

}

add_filter('the_content','count_filter');

function replace_word($comment){
    return str_replace("comment","replaced comment",$comment);
}

add_filter('comment_text','replace_word');

// PART-2

// function facts(){
//     echo 
// }

?>
