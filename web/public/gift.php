<?php
    require("func.php");	
	$name = $_POST['name'];
	$adj1 = $_POST['adj1'];
	$adj2 = $_POST['adj2'];
	$email = $_POST['email'];
    $gift =[
        "name" => $name,
        "email" => $email,
        "adj1" => $adj1,
        "adj2" => $adj2
        ];
	
    $pdo=connectDB();
	if($pdo != FALSE) {
	    add_gift($pdo, $gift);
        header("Refresh: 0.5;url=index.php");
        die();	
    } else {
		echo "connect error!";
	}

?>
