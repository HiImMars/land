<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    // Добавляем обязательные параметры
    $data = [
        'method' => "addRequest",
        'id' => "23312dsdasad21d2",
        'user_id' => 11111111,
        'api_key' => "3dsaDsdd2cj34jkk4wkdadasdas24",
        'flow' => "fdD74",
        'country' => "SK",
        'pers_info' => [
            'fio' => $name,
            'phone' => $phone,
            'ip' => $_SERVER['REMOTE_ADDR']
        ]
    ];

    // Преобразуем данные в JSON
    $json_data = json_encode($data);

    // Инициализируем cURL
    $curl = curl_init();

    // Устанавливаем параметры запроса
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.lagoon.me/api/outsource',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $json_data,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
    ));

    // Выполняем запрос
    $response = curl_exec($curl);

    // Закрываем cURL соединение
    curl_close($curl);

    // Проверяем ответ от сервера
    if ($response === false) {
        // Если возникла ошибка при выполнении запроса, возвращаем ошибку
        http_response_code(500); // Internal Server Error
        echo json_encode(array("error" => "Failed to send request"));
        exit();
    }

    

    // Выводим ответ на экран
    echo $response;
    header('Location: success.php');
    exit();

} else {
    // Если метод запроса не POST, возвращаем ошибку
    http_response_code(405); // Method Not Allowed
    echo "Error: Метод запроса должен быть POST.";
    exit();
}

?>