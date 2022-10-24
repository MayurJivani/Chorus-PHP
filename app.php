<?php
    require 'vendor/autoload.php';
    $api = new SpotifyWebAPI\SpotifyWebAPI();
    session_start();

    // Fetch the saved access token from somewhere. A session for example.
    $api->setAccessToken($_SESSION["accessToken"]);
    
    // It's now possible to request data about the currently authenticated user
    $per_data = json_encode ((array) $api->me());
   // var_dump ($per_data);
    
    $results = $api->search('Harry Styles', 'artist');

    foreach ($results->artists->items as $artist) {
            $result=$api->getArtistAlbums($artist->id);
            foreach ($result->items as $t) {
                $album_result=$api->getAlbumTracks($t->id);
                foreach ($album_result->items as $ft) {
                   $track_result=$api->getTrack($ft->id);
                   break;
                }
                break;
            }
           break; 
            
    }
?>
