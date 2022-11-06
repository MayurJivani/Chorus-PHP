<?php
    require 'vendor/autoload.php';
    session_start();
    $session = new SpotifyWebAPI\Session(
        '72c28085aad645aabbe0176ebc4a7bf0',
        '9c03812f866f416fa6e799f8952b07a2',
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
    header('Location: selectMode.php');
    die();
?>