<?php
    require 'vendor/autoload.php';
    session_start();
    $session = new SpotifyWebAPI\Session(
        '13f3f5f7945245e9b8a02a728205f780',
        'dc405c35d15d47b3a947f4dafeb3d615',
        'http://localhost/Chorus/callback.php'
    );
    
    
    $session->requestAccessToken($_GET['code']);
    
    
    $accessToken = $session->getAccessToken();
    $refreshToken = $session->getRefreshToken();
    $_SESSION["accessToken"]=$accessToken;
    $_SESSION["refreshToken"]=$refreshToken;
    $api = new SpotifyWebAPI\SpotifyWebAPI();
    $api->setAccessToken($accessToken);
    $me=$api->me();
    $_SESSION["name"]=$me->display_name;
    $_SESSION["id"]=$me->id;
    header('Location: selectMode.php');
    die();
?>