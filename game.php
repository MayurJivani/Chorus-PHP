<?php 
    function guessSong(string $guess){
        session_start();
        $Track=strtoupper($_SESSION['TrackName']);
        $guess = substr($guess, strpos($guess, " ("), strlen($guess));
        $Track = substr($Track, strpos($guess, " ("), strlen($Track));
        $guess = substr($guess, strpos($guess, " -"), strlen($guess));
        $Track = substr($Track, strpos($guess, " -"), strlen($Track));
        $guess=strtoupper($guess);
        $guessLen=strlen($guess);
        $TrackLen=strlen($Track);
        
        if(preg_match("/{$guess}/i", $Track) && $guessLen == $TrackLen) {
            echo "$Track";
            echo "<input type='hidden' id='result' value='{$guess}'></input>";  
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