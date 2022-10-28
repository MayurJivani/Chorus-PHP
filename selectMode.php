<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chorus- The music guessing game</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./Images/favicon.ico">

    <!-- Font Awesome CDN  -->
    <script src="https://kit.fontawesome.com/fddf746e6f.js" crossorigin="anonymous"></script>

    <!-- CSS sheet link -->
    <link rel="stylesheet" href="./CSS/selectMode.css">
    <link rel="stylesheet" href="./CSS/fade.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;500&family=Happy+Monkey&family=Montserrat:wght@200;400;600&family=Outfit:wght@400;700&family=Red+Hat+Display&family=Varela+Round&display=swap" rel="stylesheet">

</head>

<body>

    <svg id="fader"></svg>
    <script>
        fadeInPage();

        function fadeInPage() {
            if (!window.AnimationEvent) {
                return;
            }
            var fader = document.getElementById('fader');
            fader.classList.add('fade-out');
        }
    </script>
    <div class="headings">
        <?php echo "<h2>Hey, " . $_SESSION['name'] . "👋</h2>" ?>
        <h3>Choose a Game Mode</h3>
    </div>
    <div class="container">
        <div class="card-1">
            <div class="fav-artist">
                <img src="./Images/fav-artist.jpg" alt="" srcset="">
            </div>
            <p>Play by Searching your Favourite Artists</p>
            <div class="search-bar">
                <button type="sumbit">Search Now</button>
            </div>
        </div>
        <div class="card-2">
            <div class="bb-top100">
                <img src="./Images/bb100-img.png" alt="" srcset="">
            </div>
            <p>Guess songs on the Billboard Top 100</p>
            <div class="play-button">
                <button type="sumbit">Play Now</button>
            </div>

        </div>
    </div>

    <script src="./JavaScript/cardHoverEffect.js"></script>
</body>

</html>