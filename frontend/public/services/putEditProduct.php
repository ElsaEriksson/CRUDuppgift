<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $response = services_putEditProduct($id, $title, $description, $price);
    echo $response;
}

function services_putEditProduct($id, $title, $description, $price)
{
    $url = "http://localhost:3000/products/$id";

    $putData = json_encode(
        array(
            'title' => $title,
            'description' => $description,
            'price' => $price,
        )
    );

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");

    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    curl_setopt($ch, CURLOPT_POSTFIELDS, $putData);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        error_log('cURL error: ' . curl_error($ch));
        return json_encode(array('success' => false, 'message' => 'cURL error'));
    }

    curl_close($ch);

    return $response;
}
