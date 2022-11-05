<?php 
    session_start();
    $TrackArray = array();
    if(isset($_SESSION['artistID'])){
        $artistID = $_SESSION['artistID'];
        require 'vendor/autoload.php';
        $api = new SpotifyWebAPI\SpotifyWebAPI();
        $api->setAccessToken($_SESSION["accessToken"]);
        $results=$api->getArtistAlbums($artistID);
        foreach ($results->items as $albums) {
            $album_result=$api->getAlbumTracks($albums->id);
            foreach ($album_result->items as $tracks) {
            $track_result=$api->getTrack($tracks->id);
                //echo $track_result->name;
                array_push($TrackArray, "$track_result->uri");
            }
        }
        $TrackArray = array_unique($TrackArray); 
        $Tno=rand('0',count($TrackArray));
        $TrackToPlay=$TrackArray[$Tno];
        echo $TrackToPlay;
    }
?>