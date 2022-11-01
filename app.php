<?php
    function start_playback(){
    require 'vendor/autoload.php';
    $api = new SpotifyWebAPI\SpotifyWebAPI();
    session_start();
    $api->setAccessToken($_SESSION["accessToken"]);
    
        $results = $api->search('charlie puth', 'artist');
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
            $PlaybackDeviceId=$Did->id;
            break;
        }
        $api->play($PlaybackDeviceId, [
            'uris' => [$track_result->uri],
        ]);
    
    }

    function stop_playback(){
        require 'vendor/autoload.php';
        $api = new SpotifyWebAPI\SpotifyWebAPI();
        session_start();
        $api->setAccessToken($_SESSION["accessToken"]);
        $api->pause();
    }

    function resume_playback(){
        require 'vendor/autoload.php';
        $api = new SpotifyWebAPI\SpotifyWebAPI();
        session_start();
        $api->setAccessToken($_SESSION["accessToken"]);

        foreach($a->devices as $Did){
            $PlaybackDeviceId=$Did->id;
            break;
        }
        $api->play($PlaybackDeviceId, [
            'uris' => [$track_result->uri],
        ]);
    }

    function search_artist($query){
        $options = array("limit"=>5);
        require 'vendor/autoload.php';
        $api = new SpotifyWebAPI\SpotifyWebAPI();
        session_start();
        $api->setAccessToken($_SESSION["accessToken"]);
        $results = $api->search($query, 'artist', $options);
        foreach ($results->artists->items as $artist) {
            $artist_id=$artist->id;
            $artist_name=$artist->name;
            $artist_popularity=$artist->popularity;
            $artist_spotify=$artist->external_urls->spotify;
            foreach($artist->images as $pfp){
                $artist_pfp=$pfp->url;
                break;
            }
            echo "Id: ".$artist_id." Name: ".$artist_name." Image: ".$artist_pfp." Popularity: ".$artist_popularity." Spotify: ".$artist_spotify;
            echo "<br>";
        }

    }
    /*if($_GET["mode"] == "play" && $_GET["init"] == "true"){
        start_playback();
    }else if($_GET["mode"] == "play"){
        resume_playback();
    }else if($_GET["mode"] == "pause"){
        stop_playback();
    }*/if(isset($_POST['name'])){
        $input = $_POST['name'];
        search_artist($input);
    }
    
?>
