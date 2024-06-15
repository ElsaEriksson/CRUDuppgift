<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $response = functions_deleteProduct($id);
    echo $response;
}

function functions_deleteProduct($id)
{
    $url = "http://localhost:3000/products/$id";

    $putData = json_encode(
        array(
            'id' => $id,
        )
    );

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

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
