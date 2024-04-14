<?php
defined( 'ABSPATH' ) or die( 'Nope, not accessing this' );

function list_booked(){
    return 'Follow us on <a rel="nofollow" href="https://www.facebook.com/ThemeXpert/">Facebook</a>';
}

add_shortcode('list_booked', 'list_booked'); 

?>