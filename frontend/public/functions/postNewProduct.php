<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $img = $_POST['img'];

    $response = functions_postNewProduct($title, $description, $price, $img);
    echo $response;
}

function functions_postNewProduct($title, $description, $price, $img)
{
    $url = "http://localhost:3000/products/";

    $putData = json_encode(
        array(
            'title' => $title,
            'description' => $description,
            'price' => $price,
            'img' => $img
        )
    );

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_POST, true);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    curl_setopt($ch, CURLOPT_POSTFIELDS, $putData);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_TIMEOUT, 30); // Timeout after 30 seconds

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        error_log('cURL error: ' . curl_error($ch));
        return json_encode(array('success' => false, 'message' => 'cURL error'));
    }

    curl_close($ch);

    return $response;
}
