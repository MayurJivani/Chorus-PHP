<?php
    function start_playback(){
        require 'vendor/autoload.php';
            $api = new SpotifyWebAPI\SpotifyWebAPI();
            session_start();
            $api->setAccessToken($_SESSION["accessToken"]);       
            $a=$api->getMyDevices();
            foreach($a->devices as $Did){
                $PlaybackDeviceId=$Did->id;
                break;
            }
        if(isset($_SESSION['artistID'])){
            $track_result=$api->getTrack($_SESSION['TrackToPlay']);
            $api->play($PlaybackDeviceId, [
                'uris' => [$track_result->uri],
            ]);
        }else{
            $track_result=$api->getTrack($_SESSION['TrackToPlay']);
            $api->play($PlaybackDeviceId, [
                'uris' => [$track_result->uri],
            ]);
        }
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
        $i = 1;
        $options = array("limit"=>20);
        require 'vendor/autoload.php';
        $api = new SpotifyWebAPI\SpotifyWebAPI();
        session_start();
        $api->setAccessToken($_SESSION["accessToken"]);
        $results = $api->search($query, 'artist', $options);
        echo "<ul>";
            foreach ($results->artists->items as $artist) {
                $artist_id=$artist->id;
                $artist_name=$artist->name;
                $artist_followers=$artist->followers->total;
                $artist_spotify=$artist->external_urls->spotify;
                foreach($artist->images as $pfp){
                    $artist_pfp=$pfp->url;
                    break;
                }
                if($i<=6){
                    echo "<li class='animated fadeInLeft' onclick='artistSelect({$i})'>";
    
                echo "<span class='artist-id' id='artist-id{$i}'>".$artist_id."</span>";
                echo "<span class='artist-pfp'><img class='artist-img' src='".$artist_pfp."'></span>";
                echo "<div class='artist-info'>";
                echo "<span class='artist-name'>".$artist_name."</span>";
                echo "<span class='artist-pop'>".number_format($artist_followers)." followers</span>";
                echo "</div>";
                echo "<span class='artist-url'>"."<a href='$artist_spotify' target='_blank'><i class='fa-brands fa-spotify'></i></a>"."</span>";
    
                echo "</li>";
                }
                $i++;
    
            }
        
        echo "</ul>";

    }
    function getTrackFromArtitst($aid){
        session_start();
        $TrackArray = array();
        $TrackNameArray = array();
        $albumsID = "";
        $options = array("fields"=>'items');
        if(isset($_SESSION['artistID'])){
            $includeGroups = array("include_groups"=>'single,album');
            $artistID = $_SESSION['artistID'];
            require 'vendor/autoload.php';
            $api = new SpotifyWebAPI\SpotifyWebAPI();
            $api->setAccessToken($_SESSION["accessToken"]);
            $results=$api->getArtistAlbums($artistID, $includeGroups);
            foreach ($results->items as $albums) {
                $albumsID .= $albums->id;
                $albumsID .= ",";
            }
            $albumsID=rtrim($albumsID, ",");
            $album_result=$api->getAlbums($albumsID);
            foreach ($album_result->albums as $tracksInAlbum) {
                $Atracks = $tracksInAlbum->tracks;
                foreach ($Atracks->items as $tracks) {
                    array_push($TrackArray, "$tracks->id");
                    array_push($TrackNameArray, "$tracks->name");
                }
            }
            $TrackArray = array_unique($TrackArray);
            $TrackNameArray = array_unique($TrackNameArray);
            $Tno=rand('0',count($TrackArray));
            $TrackToPlay=$TrackArray[$Tno];
            $_SESSION['TrackToPlay']=$TrackToPlay;
            $_SESSION['TrackName'] = $TrackNameArray[$Tno];
            $_SESSION['TrackArray']=$TrackArray;
            $_SESSION['TrackNameArray']=$TrackNameArray;
        }
    }
    function getTrackFromBillboard(){
        session_start();
        $TrackArray = array();
        $TrackNameArray = array();
        $playlistId="6UeSakyzhiEt4NB3UAd6NQ";
        $options = array("fields"=>"items(track(name,id,artists(name)))");
            require 'vendor/autoload.php';
            $api = new SpotifyWebAPI\SpotifyWebAPI();
            $api->setAccessToken($_SESSION["accessToken"]);
            $results=$api->getPlaylistTracks($playlistId,$options);
            foreach ($results->items as $tracks) {
                foreach($tracks as $t){
                    array_push($TrackArray, "$t->id");
                    array_push($TrackNameArray, "$t->name");
                }
            }
            
            $Tno=rand('0',count($TrackArray));
            $TrackToPlay=$TrackArray[$Tno];
            //$TrackArtistRequest=$api->getTracks("$TrackToPlay");
            
            $_SESSION['TrackToPlay']=$TrackToPlay;
            $_SESSION['TrackName'] = $TrackNameArray[$Tno];
            $_SESSION['TrackArray']=$TrackArray;
            $_SESSION['TrackNameArray']=$TrackNameArray;
            //$_SESSION['ArtistName']=$TrackArtistNameArray=$TrackArtistRequest->artist->name;
    }
    function NextSong(){
            session_start();
            $TrackArray=$_SESSION['TrackArray'];
            $TrackNameArray=$_SESSION['TrackNameArray'];
            $Tno=rand('0',count($TrackArray));
            $TrackToPlay=$TrackArray[$Tno];
            $_SESSION['TrackToPlay']=$TrackToPlay;
            $_SESSION['TrackName'] = $TrackNameArray[$Tno];
    }
    function guessSong(){

    }

    if(isset($_GET["mode"])){
        if($_GET["mode"] == "play"){
            start_playback();
        }else if($_GET["mode"] == "pause"){
            stop_playback();
        }
    }if(isset($_POST['name'])){
        $input = $_POST['name'];
        search_artist($input);
    }
    if(isset($_POST['artistID'])){
        session_start();
        $_SESSION['artistID']=$_POST['artistID'];
        getTrackFromArtitst($_SESSION['artistID']);
    }if(isset($_POST['ToPlay'])){
        getTrackFromBillboard();
    }
    if(isset($_POST['nextSong'])){
        NextSong();
    }
    
?>
