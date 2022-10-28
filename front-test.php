<!DOCTYPE html>
<html lang="en">
<head>
  <title>Live Search</title
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  <h1>Live Search</h1>
        <input type="text" id="search">
        <table class="table table-hover">
            <tbody id="output"> 
            </tbody>
        </table>
<script type="text/javascript">
  $(document).ready(function(){
    var limit=0;
    $("#search").keypress(function(){
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
    });
  });
</script>

</body>
</html>