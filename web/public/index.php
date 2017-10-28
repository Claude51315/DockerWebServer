<?php
require("func.php")
/*
	try {
		$dsn = 'mysql:host=mysql; dbname=test;charset=utf8; port=3306';
		$pdo = new PDO($dsn, 'dev', 'dev');
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
	$sqlState = "SELECT * from test1";
	$re = $pdo->query($sqlState);
	if($re != FALSE) {
		echo "query sucess;\n";
		foreach( $re as $row)
		print $row['id'] . "\t" ;
		print $row['name'] . "\t" ;
		print $row['height'] . "\t" ;
		print $row['weight'] . "\n";
	} else {
		echo "query fail;";
	}
*/
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Xmas Gift Exchange</title>
    </head>
    <body>
        <h1>Chrismax Party with gift exchange!</h1>
        <p> Please provide the following information</p>    
    <form action="gift.php" method="POST">
        <div> <p> Name = <input type="text" name = "name"></p></div>
        <div> <p> Adj1 = <input type="text" name = "adj1"></p></div>
        <div> <p> Adj2 = <input type="text" name = "adj2"></p></div>
        <div> <p> email = <input type="text" name = "email"></p></div>
        <div> <input type="submit"></div>
    </form>		
    <?php
        $ret=connectDB();
        if($ret){
              list_gift($ret); 
        }        

    ?>

    </body>
</html>
