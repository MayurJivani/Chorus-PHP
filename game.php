<?php 
    function guessSong($guess){
        session_start();
        $TrackName=strtoupper($_SESSION['TrackName']);
        $guess=strtoupper($guess);
        
        if(){

        }
    }
    if(isset($_POST['currentGuess'])){
        guessSong($_POST['currentGuess']);
    }
?>