<?php

function getCityByIP ($ip){

    $access_key = "b2387e1538adea1c85e08d3ed2167ee4";
    // Initialize CURL:
    $ch = curl_init("http://api.ipapi.com/api/$ip?access_key=$access_key");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Store the data:
    $json = curl_exec($ch);
    curl_close($ch);

    // Decode JSON response:
    $api_result = json_decode($json, true);

    //Output the "city" and the "postal_code"
    $city = $api_result['city'];
    $zip = $api_result['zip'];

    echo "Город: {$city} <br> Код: $zip <hr>";

}

getCityByIP ("161.185.160.93");
getCityByIP ("79.110.130.62");