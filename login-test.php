<?php 
require 'vendor/autoload.php';

$session = new SpotifyWebAPI\Session(
    '13f3f5f7945245e9b8a02a728205f780',
    'dc405c35d15d47b3a947f4dafeb3d615',
    'http://localhost/pdeu/login-done.php'
);

$api = new SpotifyWebAPI\SpotifyWebAPI();

if (isset($_GET['code'])) {
    $session->requestAccessToken($_GET['code']);
    $api->setAccessToken($session->getAccessToken());

    print_r($api->me());
} else {
    $options = [
        'scope' => [
            'user-read-email',
        ],
    ];

    header('Location: ' . $session->getAuthorizeUrl($options));
    die();
}
?>