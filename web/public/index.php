<?php
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
        <title>Simple Login</title>
    </head>
    <body>
        <h1>This is a simple login interface powered by Docker.</h1>
		<p>Based on this <a href = "https://github.com/nanoninja/docker-nginx-php-mysql">Git Repo</a>, a web server environment can be easily established. </p>
    </body>
	<form action="login.php" method="POST">
		<div>  <p>Account = <input type="text" name="account"></p> </div>
		<div>  <p>Password = <input type="password" name="password"></p> </div>
		<div>  <input type="submit"> </div>
	</form>
		
</html>
