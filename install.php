<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = "46c7a89d69acccff9847def5eb0346af";
$scopes = "read_orders,write_products";

//codigo
//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
/* 
**/
$scopes = "read_orders,read_products";

$redirect_uri = "https://www.dadoroom.com/vinos/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

try {
    
    // Redirect
    header("Location: " . $install_url);
    die();
} catch (\Throwable $th) {
    echo var_dump($th);
}