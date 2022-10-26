<html>
    <head>
        <title>Chorus</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
            <input id="search" name="search" type="text" placeholder="Enter Artist Name">
        <script>
            $(document).ready(function(){
                $("#search").keyup(function(){
                    var input = $(this).val();
                    if(input != ""){
                        $.ajax({
                            url:"./app.php",
                            method:"POST",
                            data:{input: input},
                            
                            success:function(data){
                                $("search").html(data);
                            }
                        });
                    }else{
                        $("search").css("display","none");
                    }
                });
            });
        </script>
    </body>
</html>