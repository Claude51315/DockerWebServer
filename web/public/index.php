<?php require("func.php")?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Xmas Gift Exchange</title>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script>
        $(function () {
        $("#gift").submit( function (event) {
            event.preventDefault();// using this page stop being refreshing 
            $.ajax({
            type: 'POST',
            url: 'gift.php',
            data: $('form').serialize(),
            success: function () {
                location.reload();
                //alert('form was submitted');
            }
          });

        });
      });
    </script>
    </head>
    <body>
        <h1>Chrismax Party with gift exchange!</h1>
        <p> Please provide the following information</p>    
    <!-- <form action="gift.php" method="POST"> -->
    <form id="gift">
        <div> <p> Name = <input type="text" name = "name"></p></div>
        <div> <p> Adj1 = <input type="text" name = "adj1"></p></div>
        <div> <p> Adj2 = <input type="text" name = "adj2"></p></div>
        <div> <p> email = <input type="text" name = "email"></p></div>
        <div> <input type="submit" value="submit"></div>
    </form>		
    <?php
        $ret=connectDB();
        if($ret){
              list_gift($ret); 
        }        

    ?>

    </body>
</html>
