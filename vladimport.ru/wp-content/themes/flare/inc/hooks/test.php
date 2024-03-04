<?php

function custom_greeting() {
    echo 'тесттест';
}
add_action( 'flare_homepage', 'custom_greeting' );