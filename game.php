<?php 
    function guessSong($guess){
        session_start();
        $TrackName=strtoupper($_SESSION['TrackName']);
        
        $guess=strtoupper($guess);
        $guess=explode(' (',$guess);
        if(strncasecmp($TrackName,$guess,strlen($TrackName)) == '0' OR strncasecmp($TrackName,$guess) <= '3'){
            echo "<input type='hidden' value='guessed'></input>";
        }else{
            echo "Not guessed";
        }
    }
    if(isset($_POST['Guessed'])){
        echo "post";
        guessSong($_POST['Guessed']);
    }
?>