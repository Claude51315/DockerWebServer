<?php
    require("func.php");	
	$name = $_POST['name'];
	$adj1 = $_POST['adj1'];
	$adj2 = $_POST['adj2'];
    
    $salt=rand(1, 50000);
    $hash=sha1($name.$salt);
    $hash=substr($hash, 1, 5);
    $gift =[
        "name" => $name,
        "hash" => $hash,
        "adj1" => $adj1,
        "adj2" => $adj2
    ];
    $pdo=connectDB();
	if($pdo != FALSE) {
	    $ret = add_gift($pdo, $gift);
        if($ret){
            echo "add gift fail";
        } else {
           echo $hash;
          //header("Refresh: 0.5;url=index.php");
          //die();	
        }
    } else {
		echo "connect error!";
	}

?>
