<?php
    require 'vendor/autoload.php';
    $api = new SpotifyWebAPI\SpotifyWebAPI();
    session_start();

    // Fetch the saved access token from somewhere. A session for example.
    $api->setAccessToken($_SESSION["accessToken"]);
    
    // It's now possible to request data about the currently authenticated user
    $me=$api->me();
    
    $results = $api->search('Zayn Malik', 'artist');
    $track_result = 0;

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
    $a=$api->getMyDevices();
    foreach($a->devices as $Did){
        $pdevice=$Did->id;
        break;
    }
    $api->play($pdevice, [
        'uris' => [$track_result->uri],
    ]);
    

    /* "<h1><?php echo "$me->display_name"; ?><h1>" -To Display Current Logged in user name*/
?>


