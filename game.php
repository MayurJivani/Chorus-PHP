<?php 
    function guessSong(string $guess){
        session_start();
        $Track=strtoupper($_SESSION['TrackName']);
        $guess=strtoupper($guess);
        $guess = substr($guess, 0, strpos($guess, " ("));
        $Track = substr($Track, 0, strpos($Track, " ("));
        $guess=strtoupper($guess);
        $guessLen=strlen($guess);
        $TrackLen=strlen($Track);
        
        if(preg_match("/{$Track}/i", $guess) && $guessLen == $TrackLen) {
            echo "<input type='hidden' id='result' value='{$Track}{$guess}'></input>";  
        }else{
            echo "<input type='hidden' id='result' value='nopezz'></input>";
        }
    }
    if(isset($_POST['Guessed'])){
        $currentGuess=$_POST['currentGuess'];
        $guess=$_POST['Guessed'];
        guessSong($guess);
    }

?>