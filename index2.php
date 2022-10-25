<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chorus- The music guessing game</title>

    <!-- Favion -->
    <link rel="icon" type="image/x-icon" href="./Images/favicon.ico">

    <!-- Font Awesome CDN  -->
    <script src="https://kit.fontawesome.com/fddf746e6f.js" crossorigin="anonymous"></script>

    <!-- CSS sheet link -->
    <link rel="stylesheet" href="./CSS/styles.css">
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

    <button class="reveal_btn scroll_btn">
        <i class="up-arrow fa-solid fa-arrow-up"></i>
    </button>

    <section id="home_page">
        <div class="landing_page">
            <header>
                <a class="logo" href="#home_page"><span>Ch<i class="vinyl fa-solid fa-compact-disc"></i>rus</span></a>
                <nav>
                    <ul class="nav_links">
                        <li><a onclick="about_scroll()">About Us</a></li>
                        <li><a onclick="rules_scroll()">Rules</a></li>
                        <li><a href="./auth.php">Login</a></li>
                    </ul>
                </nav>
            </header>
            <div class="introduction">
                <div>
                    <p class="intro-text">Guess your favourite music!</p>
                    <button class="btn" type="button" name="button">Play Now</button>
                </div>
                <img class="back-img" src="./Images/background.png" alt="background">

            </div>
        </div>


    </section>



    <section class="reveal" id="about_the_game">

        <h2 class="about_game_heading">Chorus is a music guessing game where you can choose between two modes:</h2>
        <div class="container">
            <div class="reveal card">
                <div class="card_inner">
                    <div class="card_face card_face--front">
                        <img class="fav-artist-img" src="./Images/illustration-hero.svg" alt="fav-artist-img">
                        <p class="fav-artist-title">Favourite Artist</p>
                    </div>
                    <div class="card_face card_face--back">
                        <p class="fav-artist-desc">Guess songs from your favourite artist by using the search menu!</p>
                    </div>
                </div>
            </div>
            <div class="reveal card">
                <div class="card_inner">
                    <div class="card_face card_face--front">
                        <img class="bb-hot100-img" src="./Images/Billboard-Hot-100-new.jpg" alt="bb-hot100-img">
                        <p class="bb-hot100-title">Billboard Hot 100</p>
                    </div>
                    <div class="card_face card_face--back">
                        <p class="bb-hot100-desc">Guess from the Top 100 songs on the Billboard Hot 100 chart!</p>
                    </div>
                </div>
            </div>
        </div>



    </section>
    <section class="reveal" id="rules">
        <div class="rule">
            <h2 class="rule_heading">How to play?</h2>
            <ul class="reveal rule-list">
                <li>
                    <span class="fa-icon"><i class="icon fa-solid fa-user"></i></span>
                    <span class="rule-content">Login with your <span class="spotify"> <i class="fa-brands fa-spotify"></i> Spofity Account</span></span>
                </li>
                <li>
                    <span class="fa-icon"><i class="icon fa-solid fa-music"></i></span>
                    <span class="rule-content">A song will be played, guess the song in 6 tries</span>
                </li>
                <li>
                    <span class="fa-icon"><i class="icon fa-sharp fa-solid fa-circle-question"></i></span>
                    <span class="rule-content">Either make a guess or skip the chance</span>
                </li>
                <li>
                    <span class="fa-icon"><i class="icon fa-solid fa-circle-xmark"></i></span>
                    <span class="rule-content">Each time a chance is skipped or a wrong guess is made, the song will be played for a longer duration</span>
                </li>
                <li>
                    <span class="fa-icon"><i class="icon fa-solid fa-thumbs-up"></i></span>
                    <span class="rule-content">Answer in as few tries as possible and share your score!</span>
                </li>
            </ul>
        </div>
    </section>

    <section class="reveal" id="about">
        <div class="reveal about_us">
            <h2 class="about_heading">Meet the Developers</h2>
            <div class="reveal dev-container">
                <div class="album-cover">
                    <img class="ritwik-img" src="./Images/ritwik.JPG" alt="ritwik-img">
                    <img class="vinyl-img" src="./Images/vinyl-img-new.png" alt="vinyl-img">
                    <a href="https://www.linkedin.com/in/ritwikgarg/" target="_blank"><i class="socials-icons fa-brands fa-linkedin"></i></a>
                    <a href="https://github.com/ritwikgarg" target="_blank"><i class="socials-icons fa-brands fa-github"></i></a>
                    <a href="mailto:gargritwik08@gmail.com" target="_blank"><i class="socials-icons fa-solid fa-envelope"></i></a>
                    <p>Ritwik Garg</p>
                </div>
                <div class="album-cover">
                    <img class="mayur-img" src="./Images/mayur_pic.JPG" alt="mayur-img">
                    <img class="vinyl-img" src="./Images/vinyl-img-new.png" alt="vinyl-img">
                    <a href="https://www.linkedin.com/in/mayur-jivani-a28868221" target="_blank"><i class="socials-icons fa-brands fa-linkedin"></i></a>
                    <a href="https://github.com/MayurJivani/" target="_blank"><i class="socials-icons fa-brands fa-github"></i></a>
                    <a href="mailto:mailto:mayurjivani21@gmail.com" target="_blank"><i class="socials-icons fa-solid fa-envelope"></i></a>
                    <p>Mayur Jivani</p>
                </div>
            </div>
    </section>
    <footer>
        <div class="footer">
            <div class="hr"></div>
            <i class=" fa-solid fa-copyright"></i> 2022 Ritwik Garg, Mayur Jivani
        </div>
    </footer>




    <!-- Script link -->
    <script src="fade.js"></script>
    <script src="./JavaScript/reveal.js"></script>
    <script src="./JavaScript/progress.js"></script>
    <script src="./JavaScript/navigation-tags.js"></script>

</body>


</html>