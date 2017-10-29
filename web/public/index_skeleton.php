<?php require("func.php")?>

<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Xmas Gift Exchange</title>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script charset="utf-8">
        $(function () {
        $("#gift").submit( function (event) {
            event.preventDefault();// using this page stop being refreshing 
            $.ajax({
            type: 'POST',
            url: 'gift.php',
            data: $('form').serialize(),
            success: function (response) {
                location.reload();
                alert("Your ID is " + response);
            }
          });

        });
        $("#query").submit( function (event) {
            event.preventDefault();// using this page stop being refreshing 
            $.ajax({
            type: 'POST',
            url: 'query.php',
            data: $('form').serialize(),
            success: function (response) {
                //location.reload();
                //alert(response);
                if(response){
                    var data = JSON.parse(response);
                    var display = "name : " + data.name + ", adj1 : " + data.adj1 + ", adj2 :" + data. adj2;
 		var msg = "<div>Below is your gift receiver <p>" + display + "</p></div>"
                    $('#query_response').html(msg);
                }
                else
                    $('#query_response').html("Not Found")
                    
            }
          });

        })
        });
    </script>
    </head>
    <body>
        <h1>Chrismas Party with gift exchange!</h1>
        <p> Please provide the following information</p>    
    <!-- <form action="gift.php" method="POST"> -->
    <form id="gift" action="gift.php" method="POST">
        <div> <p> Name = <input type="text" name = "name"></p></div>
        <div> <p> Adj1 = <input type="text" name = "adj1"></p></div>
        <div> <p> Adj2 = <input type="text" name = "adj2"></p></div>
        <div> <input type="submit" value="submit"></div>
    </form>		
    <form id="query" action="query.php" method="POST">
        <div> <p> Your ID = <input type="text" name = "hash"></p></div>
        <div> <input type="submit" value="submit"></div>
    </form>
    <div id="query_response">
        <div>Below is your gift receiver <p id="query_response"></p></div>
    </div>    
    </body>
</html>
