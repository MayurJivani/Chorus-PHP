<?php 
    session_start();
    echo $_SESSION['TrackToPlay'];
    echo "<br>";
    echo $_SESSION['TrackName'];
    echo "<br>";
    print_r($_SESSION['TrackArray']) ;
    echo "<br>";
    print_r($_SESSION['TrackNameArray']) ;
?>