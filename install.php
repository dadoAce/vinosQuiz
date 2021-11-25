<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = "46c7a89d69acccff9847def5eb0346af";
$scopes = "read_orders,write_products";

/* 
**/
$scopes = "read_orders,read_products,write_products,read_discounts,write_discounts,read_price_rules,write_price_rules";

$redirect_uri = "https://www.dadoroom.com/shopifyapp/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

try {
    
    // Redirect
    header("Location: " . $install_url);
    die();
} catch (\Throwable $th) {
    echo var_dump($th);
}