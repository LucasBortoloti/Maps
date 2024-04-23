<?php

$imageBase64 = $_POST['imageData']; //get base64 of image from client end

$unique_name = uploadSingleImage($imageBase64); //function call

//function to upload image and get an unique name to store in db

function uploadSingleImage($base64)
{
    $imageFolder = "upload/images/";
    $uniname = uniqid() . date("Y-m-d-H-i-s") . ".png";
    $new_image_url = $imageFolder . $uniname;
    $base64 = base64_decode($base64);
    file_put_contents($new_image_url, $base64);
    echo json_encode(array('status' => 'ok', 'img' => $new_image_url));
}
