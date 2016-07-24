<?php
/*
Plugin Name: Recipe Icons Shortcode
Plugin URI: https://github.com/croquelois
Description: Adds icons via a shortcode. you can use [tip] [warning] [serve nb=1] [star nb=1]
Version: 1.00
Author: Matthieu Croquelois
Author URI: https://github.com/croquelois
*/

function icon_shortcode_handler($atts){
    switch ($atts['img']) {
    case "tip":
        $output = "<img src=\"/wp-content/plugins/recipe-icons/img/Tip.gif\" alt=\"!\" width=\"17\" height=\"21\">";
        break;
    case "warning":
        $output = "<img src=\"/wp-content/plugins/recipe-icons/img/Becareful.gif\" alt=\"!\" width=\"17\" height=\"21\">";
        break;
    case "serve":
        $nb = $atts['nb'];
        $output = str_repeat("<img src=\"/wp-content/plugins/recipe-icons/img/serve.gif\" alt=\"serve\" width=\"19\" height=\"19\">",$nb);
        break;
    case "star":
        $nb = $atts['nb'];
        $output = str_repeat("<img src=\"/wp-content/plugins/recipe-icons/img/Star4Diff.gif\" alt=\"Star\" width=\"14\" height=\"14\">",$nb);
        break;        
  }
  return $output;
}
add_shortcode('icon', 'icon_shortcode_handler');
?>