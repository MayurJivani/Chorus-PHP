<!DOCTYPE html>
<html>
  <head>
    <title>Spotify Web Playback SDK Quick Start</title>
    <script src="https://sdk.scdn.co/spotify-player.js"></script>
  </head>
  <body>
    <script>
        window.onSpotifyWebPlaybackSDKReady = () => {
            const token = 'BQCJqWZpyvFr7GoQy-40_TKDWMqVZhELcKIx1HtqJ8c2nD1IBFHZb8vcoEgxGb5qgyBRUM45GxkQObwVD6ZpQjAkdUVUAgeC7TVH0VJdpBFnbrDCRWuVTs0-l6GXv6JvUyUD4VRbf_ss_R-GQ1gw5UO9nS6ez3W-bQ2CgzjdKv43KzORzwF2dAABdCvfH1pZnXK5cyJ-qBMpti4p4bA';
            const player = new Spotify.Player({
                name: 'WebSDK',
                getOAuthToken: cb => { cb(token); },
                volume: 0.3
            })

            player.connect();

            console.log("Player ready!")

            document.getElementById('togglePlay').onclick = function() {
                player.togglePlay();
            };

            player.addListener('ready', ({ device_id }) => {
                console.log('Ready with Device ID', device_id);
                
            });
        };
    </script>
    <button id="togglePlay">Play</button>
    <p id="something"></p>

    <form>
      <input type="hidden" value="" id="spotID" >
    </form>

    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/63Ycrpi5da05jRSG5qGPM9?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
    
    <script>
        //setTimeout(() => {document.querySelector("button[data-testid='play-button']").click()}, 6000)
        let d = 1234;
        document.getElementById("spotID").value = d;
        
    </script>

    <?php 
      $dom = new DOMDocument();
    
      echo $dom->getElementById("spotID")->getAttribute("value");
    ?>
    
  </body>
</html>