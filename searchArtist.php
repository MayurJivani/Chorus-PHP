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

  <!-- CSS sheet link -->
  <link rel="stylesheet" href="./CSS/front-test.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;500&family=Happy+Monkey&family=Montserrat:wght@200;400;600&family=Outfit:wght@400;700&family=Red+Hat+Display&family=Varela+Round&display=swap" rel="stylesheet">
</head>

<body>
<<<<<<< Updated upstream:searchArtist.php
  <h1>Live Search</h1>
        <input type="text" id="search">
        <table class="table table-hover">
            <tbody id="output"> 
            </tbody>
        </table>
<script type="text/javascript">
  $(document).ready(function(){
    var limit=0;
    var textBox=document.getElementById("search");
    textBox.addEventListener("keypress", function(event) {
      if (event.key === "Enter") {
        event.preventDefault();
        ajaxSearch();
      }
      
    });
  });
  function ajaxSearch(){
        if(limit>0){
            $.ajax({
                type:'POST',
                url:'./app.php',
                data:{
                name:$("#search").val(),
                },
                success:function(data){
                $("#output").html(data);
                }
            });
        }
        limit++;
    }
</script>
=======
  <h2>Live Search</h2>
  <input type="text" id="search">
  <table class="table table-hover">
    <tbody id="output">
    </tbody>
  </table>

  <script type="text/javascript">
    $(document).ready(function() {
      var limit = 0;
      $("#search").keypress(function() {
        if (limit > 0) {
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
        limit++;
      });
    });
  </script>
>>>>>>> Stashed changes:front-test.php

</body>

</html>