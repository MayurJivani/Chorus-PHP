<?php
    require 'vendor/autoload.php';
    $api = new SpotifyWebAPI\SpotifyWebAPI();
    session_start();

    // Fetch the saved access token from somewhere. A session for example.
    $api->setAccessToken($_SESSION["accessToken"]);
    
    // It's now possible to request data about the currently authenticated user
    print_r(
        $api->me()
    );
    
    // Getting Spotify catalog data is of course also possible
    print_r(
        $api->getTrack('7EjyzZcbLxW7PaaLua9Ksb')
    );
?>