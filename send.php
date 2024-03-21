<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $pixel_id = $_POST['pixel_id'];
    $id = uniqid();
    $api_url = 'https://api.lagoon.me/api/outsource';
    $api_key = '3dsaDsdd2cj34jkk4wkdadasdas24';
    $user_id = 11111111;
    $flow = "fdD74";
    $_country = "SK";

    $data = [
        'method' => "addRequest",
        'id' => $id,
        'user_id' => $user_id,
        'api_key' => $api_key,
        'flow' => $flow,
        'pers_info' => [
        'name' => $name,
        'phone' => $phone,
        'ip' => $ip
        ]
    ];

    // $data = [
    //     'method' => "addRequest",
    //     'id' => "23312dsdasad21d2",
    //     'user_id' => 11111111,
    //     'api_key' => "3dsaDsdd2cj34jkk4wkdadasdas24",
    //     'flow' => "fdD74",
    //     'country' => "SK",
    //     'pers_info' => [
    //         'fio' => $name,
    //         'phone' => $phone,
    //         'ip' => $_SERVER['REMOTE_ADDR']
    //     ]
    // ];

    $_SESSION['name'] = $name;
    $_SESSION['phone'] = $phone;
    $_SESSION['id'] = $data['id'];
    $_SESSION['pixel_id'] = $pixel_id;
    

    $json_data = json_encode($data);

    $curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => $api_url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => false,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_POST => true, 
    CURLOPT_POSTFIELDS => $json_data,
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
    ),
));

    // curl_setopt_array($curl, array(
    //     CURLOPT_URL => 'https://api.lagoon.me/api/outsource',
    //     CURLOPT_RETURNTRANSFER => true,
    //     CURLOPT_ENCODING => '',
    //     CURLOPT_MAXREDIRS => 10,
    //     CURLOPT_TIMEOUT => 0,
    //     CURLOPT_FOLLOWLOCATION => false,
    //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //     CURLOPT_CUSTOMREQUEST => 'POST',
    //     CURLOPT_POSTFIELDS => $json_data,
    //     CURLOPT_HTTPHEADER => array(
    //         'Content-Type: application/json'
    //     ),
    // ));

    $response = curl_exec($curl);

    $httpStatus = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    if ($httpStatus >= 200 && $httpStatus < 300) {
        error_log("API Request Data: " . print_r($data, true));
        header('Location: success.php');
    exit();
    } else {
        echo 'Error sending request to API. HTTP Status Code: ' . $httpStatus;
    }

curl_close($curl);

}

?>