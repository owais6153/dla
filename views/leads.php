<?php
set_time_limit(0);
$domain = "designlayeragency.com";
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$brief = '';
$news = $_REQUEST['news'];
$route = $_REQUEST['route'];
$brand = $_REQUEST['brand'];
$tag = $_REQUEST['tag'];
$price = $_REQUEST['price'];
$data = array(
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'brief' => $brief,
    'news' => 1,
    'route' => $route,
    'brand' => $brand,
    'tag' => $tag,
    'price' => $price,
    'domain' => $domain
);
if ($_REQUEST['phone'] == '5556660606' || $_REQUEST['phone'] == '555-666-0606') {
    exit(header("location:/"));
}
if (isset($_REQUEST["gender"]) && $_REQUEST["gender"] != "") {
    header("location: /");
    exit();
}
if ($_POST['token'] == $_SESSION['token']) {
    $payload = json_encode($data);
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://tealslab.com/api/customer",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 500,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $payload,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
        ),
    ));
    $response = curl_exec($curl);
    $err = curl_error($curl);
    var_dump($response, $err);

    if ($response == false) {
        echo 'Curl error: ' . curl_error($curl);
        var_dump($response);
        die;
    }
    $decodeResponse = json_decode($response);
    $msg = $decodeResponse[1];
    header("location:/thank-you/?successMsg=$msg");
} else {
    exit(header("location:/"));
}
