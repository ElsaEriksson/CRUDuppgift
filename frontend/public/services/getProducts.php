<?php
require_once(__DIR__ . "/../models/Product.php");
require_once(__DIR__ . "/../functions/showProducts.php");

$url = "http://localhost:3000/products";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}

curl_close($ch);

$data = json_decode($response, true);

$products = [];
if (is_array($data)) {
    foreach ($data as $item) {
        $products[] = new Product(
            $item['_id'] ?? null,
            $item['title'] ?? '',
            $item['description'] ?? '',
            $item['price'] ?? 0,
            $item['img'] ?? ''
        );
    }
}
function functions_getProducts($products)
{
    functions_showProducts($products);
    functions_viewOneProduct($products);
}
