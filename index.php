<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome CDN  -->
    <script src="https://kit.fontawesome.com/fddf746e6f.js" crossorigin="anonymous"></script>

    <!-- CSS sheet link -->
    <link rel="stylesheet" href="/CSS/styles.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;500&family=Happy+Monkey&family=Montserrat:wght@200;400;600&family=Outfit:wght@400;700&family=Red+Hat+Display&family=Varela+Round&display=swap" rel="stylesheet">

    <!--Mayur ki Javaani-->
</head>

<body>
    <section id="home_page">
        <header>
            <a class="logo" href="#home_page"><span>Ch<i class="vinyl fa-solid fa-compact-disc"></i>rus</span></a>
            <nav>
                <ul class="nav_links">
                    <li><a href="#about_us">About Us</a></li>
                    <li><a href="#rules">Rules</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </nav>
        </header>
        <div class="introduction">
            <p class="intro-text">Guess your favourite music!</p>
            <button class="btn" type="button" name="button">Play Now</button>
        </div>
    </section>

    <section id="about_the_game">
        <h2 class="about_heading">Chorus is a music guessing game where you can choose between two modes:</h2>
        <div class="container">
            <div class="card">
                <div class="card_inner">
                    <div class="card_face card_face--front">
                        <img class="fav-artist-img" src="/Images/illustration-hero.svg" alt="fav-artist-img">
                        <p class="fav-artist-title">Favourite Artist</p>
                    </div>
                    <div class="card_face card_face--back">
                        <p class="fav-artist-desc">Guess songs from your favourite artist by using the search menu!</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card_inner">
                    <div class="card_face card_face--front">
                        <img class="bb-hot100-img" src="/Images/Billboard-Hot-100-new.jpg" alt="bb-hot100-img">
                        <p class="bb-hot100-title">Billboard Hot 100</p>
                    </div>
                    <div class="card_face card_face--back">
                        <p class="bb-hot100-desc">Guess from the top 100 songs on the Billboard Hot 100 chart!</p>
                    </div>
                </div>
            </div>
        </div>
        
        
    </section>
    <section id="rules">
        <div class="rule">
            <h2 class="rule_heading">How to play?</h2>
            <p>Guess the song in 6 tries</p>
            <ul>
                <li>Select from 2 game modes: </li>
            </ul>
        </div>
    </section>

    <section id="about_us"></section>

    <!-- Script link -->
    <script src="/JavaScript/main.js"></script>

</body>

</html>