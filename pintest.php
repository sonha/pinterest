<?php
require_once "Pinterest.class.php";

//use this link : https://gist.github.com/iwek/7549309
//http://stackoverflow.com/questions/24194892/how-to-obtain-pinterest-v3-api-key-or-access-token
https://github.com/seregazhuk/php-pinterest-bot#installation
// Create the pinterest object and log in
$p = new Pinterest();
$p->login("hason61vn@gmail.com", "060854775");
if( $p->is_logged_in() )
    echo "Success, we're logged in\n";

// Set up the pin
$p->pin_url = "http://yellow5.com";
$p->pin_description = "My awesome pin";
$p->pin_image_preview = $p->generate_image_preview("compot.jpg");

var_dump($p->pin_image_preview );die;

// Get the boards
$p->get_boards();

// Pin to the board called "Items"
if( !isset($p->boards['Items']) ) {
    echo "For testing, please create a board called 'Items' and try again!\n";
    exit;
}

$p->pin($p->boards['Items']);

// And we're done
echo "Hooray!\n";
