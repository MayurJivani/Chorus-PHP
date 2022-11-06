<?php
    session_start();
    echo $_SESSION["ArtistName"];
    echo "<br>";
    echo $_SESSION["ArtistProfile"];
    echo "<br>";
    echo $_SESSION['TrackToPlay'];
    echo "<br>";
    echo $_SESSION['TrackName'];
    echo "<br>";
    print_r($_SESSION['TrackArray']);
    echo "<br>";
    print_r($_SESSION['TrackNameArray']);
    echo "<br>";
    print_r($_SESSION["PlaylistProfile"]);
    echo "<br>";
    print_r($_SESSION["TrackArtistNameArray"]);
?>