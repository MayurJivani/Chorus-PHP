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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- CSS sheet link -->
  <link rel="stylesheet" href="./CSS/searchArtist.css">
  <link rel="stylesheet" href="./CSS/fade.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;500&family=Happy+Monkey&family=Montserrat:wght@200;400;600&family=Outfit:wght@400;700&family=Red+Hat+Display&family=Varela+Round&display=swap" rel="stylesheet">
</head>

<body>

  <div class="loader">
    <i class="fa-solid fa-compact-disc"></i>
  </div>

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

  <h2>Search an Artist</h2>
  <form class="search-bar" autocomplete="off">
    <input type="text" id="search" placeholder="Search Here">
    <button onclick="ajaxSearch()"><img src="./Images/search.png" alt="search-icon" srcset="" data-modal-target="#valid-input-modal"></button>
  </form>
  <div id="output"></div>
  <div id="artistTrack"></div>

  <div class="modal valid-input-modal" id="valid-input-modal">
    <div class="home-container">
      <h2>Please Enter a Valid Input</h2>
      <div>
        <button data-close-button class="close-btn">Okay</button>
      </div>
    </div>
  </div>

  <div id="overlay"></div>

  <script type="text/javascript">
    $(document).ready(function() {
      var textBox = document.getElementById("search");
      textBox.addEventListener("keypress", function(event) {
        if (event.key === "Enter") {
          event.preventDefault();
          ajaxSearch();
        }
      });
    });

    function ajaxSearch() {
      event.preventDefault();
      $.ajax({
        type: 'POST',
        url: './app.php',
        data: {
          name: $("#search").val(),
        },
        success: function(data) {
          $("#output").html(data);
        }
      });

    }

    function artistSelect(i) {
      var aid = document.getElementById('artist-id' + i).textContent;
      const load = document.querySelector('.loader');
      load.classList.add('active');
      $.post('app.php', {
        artistID: aid
      });
      location.href = 'playGame.php';
    }
  </script>

  <script src="./JavaScript/fade.js"></script>
  <script src="./JavaScript/validInputModal.js"></script>

</body>

</html>