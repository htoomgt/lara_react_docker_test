<?php

    $availableProducts = [
        ['name' => 'Apple'],
        ['name' =>'Banana'],
        ['name' => 'Iphone'],
        ['name' => 'Lambogani'],
        ['name' => 'Private Jet'],
        ['name' => 'very nice house']
    ];

    $jsonData = json_encode($availableProducts, JSON_PRETTY_PRINT || JSON_NUMERIC_CHECK);

    http_response_code(200);
    header("Access-Control-Allow-Origin: *");
    header("content-type: application/json");
    echo $jsonData;