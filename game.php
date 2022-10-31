<?php 
    //session_start();
    //if(isset($_SESSION['artistID'])){
        $artistID = "5ZsFI1h6hIdQRw2ti0hz81";
        require 'vendor/autoload.php';
        $api = new SpotifyWebAPI\SpotifyWebAPI();
        session_start();
        $api->setAccessToken($_SESSION["accessToken"]);
        $results=$api->getArtistAlbums($artistID);
        foreach ($results->items as $albums) {
            $album_result=$api->getAlbumTracks($albums->id);
            foreach ($album_result->items as $tracks) {
            $track_result=$api->getTrack($tracks->id);
                echo $track_result->name;
            }
        }
    //}
?>