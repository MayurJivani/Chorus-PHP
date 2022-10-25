<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Spotify Web Playback SDK Quick Start</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js"></script>
</head>
<body>
    <h1>Spotify Web Playback SDK Quick Start</h1>
    <button id="togglePlay">Toggle Play</button>

    <script src="https://sdk.scdn.co/spotify-player.js"></script>
    
    <script>
        deviceID = 0;

        window.onSpotifyWebPlaybackSDKReady = () => {
            const token = '<?php echo $_SESSION["accessToken"]; ?>';
            const player = new Spotify.Player({
                name: 'Web Playback SDK Quick Start Player',
                getOAuthToken: cb => { cb(token); },
                volume: 0.5
            });

            // Ready
            player.addListener('ready', ({ device_id }) => {
                console.log('Ready with Device ID', device_id);
                deviceID = device_id;
                document.cookie = "deviceID=" + deviceID + ";";
            });
            
            // Not Ready
            player.addListener('not_ready', ({ device_id }) => {
                console.log('Device ID has gone offline', device_id);
            });

            player.addListener('initialization_error', ({ message }) => {
                console.error(message);
            });

            player.addListener('authentication_error', ({ message }) => {
                console.error(message);
            });

            player.addListener('account_error', ({ message }) => {
                console.error(message);
            });

            document.getElementById('togglePlay').onclick = function() {
              player.togglePlay();
              
            };

            player.connect();
        }
    </script>
    
</body>
</html>
