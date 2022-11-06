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
    <link rel="stylesheet" href="./CSS/playGame.css">
    <link rel="stylesheet" href="./CSS/fade.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;500&family=Happy+Monkey&family=Montserrat:wght@200;400;600&family=Outfit:wght@400;700&family=Red+Hat+Display&family=Varela+Round&display=swap" rel="stylesheet">

    <!-- Ajax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
        function guessInput(){
                currentGuess++;
            }
    </script>

    <div class="header">
        <header>
            <a data-modal-target="#home-modal" class="logo" onclick="top_scroll()"><span>Ch<i class="vinyl fa-solid fa-compact-disc"></i>rus</span></a>
            <nav>
                <ul class="nav_links">
                    <li><button data-modal-target="#htp-modal" class="rules-open-btn"><i class="icon fa-sharp fa-solid fa-circle-question"></i></button></li>
                    <li><button data-modal-target="#stats-modal" class="stats-open-btn"><i class="fa-solid fa-chart-line"></i></button></li>
                </ul>
            </nav>
        </header>
    </div>


    <div class="container">
        <!-- Record Player -->
        <div class="player-container">
            <button data-value="false" id="button-toggle" type="button" onclick="toggleButton()">
                <i class="pause fa-solid fa-pause"></i>
                <i class="play fa-solid fa-play"></i>
            </button>
            <div class="cd-player" data-value="false">
                <svg class="vinyl-img" viewBox="0 0 800 800">
                    <title>LP</title>
                    <path fill="#181819" d="M400,1C179.6,1,1,179.6,1,400s178.6,399,399,399s399-178.6,399-399S620.4,1,400,1zM400,409.8c-5.4,0-9.8-4.4-9.8-9.8s4.4-9.8,9.8-9.8s9.8,4.4,9.8,9.8S405.4,409.8,400,409.8z"></path>
                    <g stroke-width="1.5" stroke="#2d2d2d" fill="#181819">
                        <path d="M400,20C190.1,20,20,190.1,20,400s170.1,380,380,380s380-170.1,380-380S609.9,20,400,20z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"></path>
                        <path d="M400,30C195.7,30,30,195.6,30,400s165.7,370,370,370s370-165.7,370-370S604.3,30,400,30z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"></path>
                        <path d="M400,40C201.2,40,40,201.2,40,400s161.2,360,360,360s360-161.2,360-360S598.8,40,400,40z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"></path>
                        <path d="M400,50C206.7,50,50,206.7,50,400s156.7,350,350,350s350-156.7,350-350S593.3,50,400,50z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"></path>
                        <path d="M400,60C212.2,60,60,212.2,60,400s152.2,340,340,340s340-152.2,340-340S587.8,60,400,60z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"></path>
                        <path d="M400,70C217.8,70,70,217.8,70,400s147.8,330,330,330s330-147.8,330-330S582.2,70,400,70z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"></path>
                        <path d="M400,80C223.3,80,80,223.3,80,400s143.3,320,320,320s320-143.3,320-320S576.7,80,400,80z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"></path>
                        <path d="M400,90C228.8,90,90,228.8,90,400s138.8,310,310,310s310-138.8,310-310S571.2,90,400,90z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"></path>
                        <path d="M400,100c-165.7,0-300,134.3-300,300s134.3,300,300,300s300-134.3,300-300S565.7,100,400,100z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"></path>
                        <path d="M400,110c-160.2,0-290,129.8-290,290s129.8,290,290,290s290-129.8,290-290S560.2,110,400,110z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"></path>
                        <path d="M400,120c-154.6,0-280,125.4-280,280s125.4,280,280,280s280-125.4,280-280S554.6,120,400,120z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"></path>
                        <path d="M400,130c-149.1,0-270,120.9-270,270s120.9,270,270,270s270-120.9,270-270S549.1,130,400,130z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"></path>
                        <path d="M400,140c-143.6,0-260,116.4-260,260s116.4,260,260,260s260-116.4,260-260S543.6,140,400,140z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"></path>
                        <path d="M400,150c-138.1,0-250,111.9-250,250s111.9,250,250,250s250-111.9,250-250S538.1,150,400,150z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"></path>
                        <path d="M400,160c-132.5,0-240,107.5-240,240s107.5,240,240,240s240-107.5,240-240S532.5,160,400,160z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"></path>
                        <path d="M400,170c-127,0-230,103-230,230s103,230,230,230s230-103,230-230S527,170,400,170z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"></path>
                        <path d="M400,180c-121.5,0-220,98.5-220,220s98.5,220,220,220s220-98.5,220-220S521.5,180,400,180z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"></path>
                        <path d="M400,190c-116,0-210,94-210,210s94,210,210,210s210-94,210-210S516,190,400,190z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"></path>
                        <path d="M400,200c-110.5,0-200,89.5-200,200s89.5,200,200,200s200-89.5,200-200S510.5,200,400,200z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"></path>
                    </g>
                    <path id="cover" fill="#4bb749" opacity="0" d="M400,262.1c-76.1,0-137.9,61.7-137.9,137.9S323.9,537.9,400,537.9S537.9,476.1,537.9,400S476.1,262.1,400,262.1z M400,411.7c-6.4,0-11.7-5.2-11.7-11.7s5.2-11.7,11.7-11.7s11.7,5.2,11.7,11.7S406.4,411.7,400,411.7z"></path>
                    <defs>
                        <clipPath id="coverClip">
                            <path fill="#4bb749" d="M400,262.1c-76.1,0-137.9,61.7-137.9,137.9S323.9,537.9,400,537.9S537.9,476.1,537.9,400S476.1,262.1,400,262.1z M400,411.7c-6.4,0-11.7-5.2-11.7-11.7s5.2-11.7,11.7-11.7s11.7,5.2,11.7,11.7S406.4,411.7,400,411.7z"></path>
                        </clipPath>
                    </defs>
                    <?php
                    require 'vendor/autoload.php';
                    $api = new SpotifyWebAPI\SpotifyWebAPI();
                    $api->setAccessToken($_SESSION["accessToken"]);
                    $results = $api->getArtist($_SESSION['artistID']);
                    foreach ($results->images as $pfp) {
                        $artist_pfp = $pfp->url;
                        break;
                    }
                    echo '<image xlink:href=' . "$artist_pfp " . 'x="250" y="250" height="300px" width="300px" clip-path="url(#coverClip)" />'
                    ?>
                </svg>
            </div>
            <form class="guess-input" action="" autocomplete="off">
                <input id="addInput" type="text" placeholder="Guess song here">
            </form>
            <div class="buttons">
                <button id="skipBtn" type="sumbit" onclick="guessInput()">Skip</button>
                <button id="addBtn" type="submit" onclick="guessInput()">Submit</button>
            </div>
        </div>
        <!-- Guess List -->
        <div class="guess-container">
            <ul class="guess-output fade">
                <!-- <li class="guess-output-li">
                    <span class="fa-icon"> <i class="skip fa-solid fa-forward-step"></i> <i class="correct fa-solid fa-circle-check"></i> <i class="wrong fa-solid fa-circle-xmark"></i></span>
                    <span class="guess-content"></span>
                </li>-->
            </ul>
        </div>
    </div>

    <!-- How to Play Pop Up -->
    <div class="modal how-to-play-modal" id="htp-modal">
        <div class="rule">
            <h2 class="reveal rule_heading">How to play?</h2>
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
        <button data-close-button class="close-btn">Play</button>
    </div>

    <!-- Statistics Pop Up -->
    <div class="modal stats-modal" id="stats-modal">
        <div class="stats">
            <h2 class="reveal rule_heading">Statistics</h2>
            <div class="stats-container">
                <div class="flex-item">
                    <div class="stat">0</div>
                    <div class="stat-heading">Played</div>
                </div>
                <div class="flex-item">
                    <div class="stat">0</div>
                    <div class="stat-heading">Wins</div>
                </div>
                <div class="flex-item">
                    <div class="stat">0</div>
                    <div class="stat-heading">Win %</div>
                </div>
                <div class="flex-item">
                    <div class="stat">0</div>
                    <div class="stat-heading">Current Streak</div>
                </div>
                <div class="flex-item">
                    <div class="stat">0</div>
                    <div class="stat-heading">Max Streak</div>
                </div>
            </div>
        </div>
        <button data-close-button class="close-btn">Go Back</button>
    </div>

    <!-- Home Page Modal -->
    <div class="modal home-modal" id="home-modal">
        <div class="home-container">
            <h2>Going back to the home page will automatically forfeit the current game.</h2>
            <br>
            <p>Are you sure you want to continue?</p>
            <div>
                <button data-close-button class="close-btn">Go Back</button>
                <button class="close-btn" onClick="location.href='index.php'">Continue</button>
            </div>
        </div>
    </div>


    <!-- Enter Valid Input Modal -->
    <dialog class="valid-input-modal" id="valid-input-modal">
        <h2>Please Enter a Valid Input!</h2>
        <button class="close-btn" id="valid-input-modal-close-btn">Okay</button>
    </dialog>

    <div id="overlay"></div>


    <script src="./JavaScript/fade.js"></script>
    <script src="./JavaScript/PlayGame/toggleButton.js"></script>
    <script src="./JavaScript/PlayGame/addItemToList.js"></script>
    <script src="./JavaScript/PlayGame/openAndCloseModal.js"></script>

    <script src="https://sdk.scdn.co/spotify-player.js"></script>

    <script>
        deviceID = 0;
        isPlay = true;
        isFirst = true;
        currentGuess = "-1";           
        globalThis.currentGuess = "-1";
        window.onSpotifyWebPlaybackSDKReady = () => {
            const token = "<?php echo $_SESSION['accessToken']; ?>";
            const player = new Spotify.Player({
                name: 'Chorus',
                getOAuthToken: cb => {
                    cb(token);
                },
                volume: 0.5
            });

            // Ready
            player.addListener('ready', ({
                device_id
            }) => {
                console.log('Ready with Device ID', device_id);
                deviceID = device_id;
                document.cookie = "deviceID=" + deviceID + ";";
            });

            // Not Ready
            player.addListener('not_ready', ({
                device_id
            }) => {
                console.log('Device ID has gone offline', device_id);
            });

            player.addListener('initialization_error', ({
                message
            }) => {
                console.error(message);
            });

            player.addListener('authentication_error', ({
                message
            }) => {
                console.error(message);
            });

            player.addListener('account_error', ({
                message
            }) => {
                console.error(message);
            });

            document.getElementById('button-toggle').onclick = function() {
                if (isFirst) {
                    
                    player.togglePlay();
                    $.ajax({
                        url: "app.php?mode=play"
                    })
                    setTimeout(autopause, 4000);
                    isFirst = false;
                    currentGuess++;
                }else if(currentGuess == 0){
                    player.resume();
                    setTimeout(autopause, 2000);
                }else if(currentGuess == 1){
                    player.resume();
                    setTimeout(autopause, 4550);
                }else if(currentGuess == 2){
                    player.resume();
                    setTimeout(autopause, 7000);
                }else if(currentGuess == 3){
                    player.resume();
                    setTimeout(autopause, 9000);
                }else if(currentGuess == 4){
                    player.resume();
                    setTimeout(autopause, 12000);
                }else if(currentGuess > 4){
                    player.resume();
                    setTimeout(autopause, 16000);
                }

                const btn = document.querySelector('#button-toggle');
                btn.dataset.value = btn.dataset.value === "true" ? "false" : "true";
                console.log(btn.dataset.value);

                const vinyl = document.querySelector('.cd-player');
                vinyl.dataset.value = vinyl.dataset.value === "true" ? "false" : "true";
                console.log("Vinyl: " + btn.dataset.value);

            };

            player.connect();

            function autopause() {
                player.pause();
                const btn = document.querySelector('#button-toggle');
                btn.dataset.value = btn.dataset.value === "true" ? "false" : "true";
                console.log(btn.dataset.value);

                const vinyl = document.querySelector('.cd-player');
                vinyl.dataset.value = vinyl.dataset.value === "true" ? "false" : "true";
                console.log("Vinyl: " + btn.dataset.value);
                player.seek(0)
            }
        }
    </script>

</body>