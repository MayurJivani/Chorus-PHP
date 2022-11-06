<?php 
require 'vendor/autoload.php';

$session = new SpotifyWebAPI\Session(
    '72c28085aad645aabbe0176ebc4a7bf0',
    '9c03812f866f416fa6e799f8952b07a2',
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