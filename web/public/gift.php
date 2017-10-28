<?php
    require("func.php");	
	$name = $_POST['name'];
	$adj1 = $_POST['adj1'];
	$adj2 = $_POST['adj2'];
	$email = $_POST['email'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo "invalid email address!";
        header("Refresh: 0.5;url=index.php");
        die();	
    }

    $gift =[
        "name" => $name,
        "email" => $email,
        "adj1" => $adj1,
        "adj2" => $adj2
        ];
	
    $pdo=connectDB();
	if($pdo != FALSE) {
	    $ret = add_gift($pdo, $gift);
        if($ret){
            echo "add gift fail";
        } else {
            header("Refresh: 0.5;url=index.php");
            die();	
        }
    } else {
		echo "connect error!";
	}

?>
