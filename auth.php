<?php 
require 'vendor/autoload.php';

$session = new SpotifyWebAPI\Session(
    '13f3f5f7945245e9b8a02a728205f780',
    'dc405c35d15d47b3a947f4dafeb3d615',
    'http://localhost/Chorus/callback.php'
);

$state = $session->generateState();
$options = [
    'scope' => [
        'playlist-read-private',
        'user-read-private',
        'user-read-playback-state',
        'user-modify-playback-state',
        'user-read-currently-playing',
        'user-read-currently-playing',
        'streaming',
    ],
    'state' => $state,
];

header('Location: ' . $session->getAuthorizeUrl($options));
die();
?>