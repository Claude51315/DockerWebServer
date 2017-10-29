<?php
	function connectDB(){
		$dsn = 'mysql:host=mysql; dbname=test; charset=utf8; port=3306';
		try {
			$pdo = new PDO($dsn, 'dev', 'dev');
		} catch (PDOException $e){
			echo $e->getMessage();
			return FALSE;
		}
		return $pdo;
	}
	function login($pdo, $account, $password){
		$sql = sprintf("Select * from `user` where `account` = '%s' and `password` = '%s';",
						$account, 
						$password);
        $stmt = $pdo->prepare($sql);
        if($stmt->execute()) {
            $ret = $stmt->fetchAll();
            if(count($ret) > 0 ) {
                return ($ret[0]["name"]);
            }
        }
        return FALSE;
    }
    function add_gift( $pdo,  $gift ){
        $sql = sprintf("INSERT INTO `gift` (`Name`, `adj1`, `adj2`, `hash`) VALUES ('%s', '%s', '%s', '%s');", 
        $gift["name"], 
        $gift["adj1"],
        $gift["adj2"],
        $gift["hash"]);
        $stmt = $pdo->prepare($sql);
        if($stmt->execute()){
            return 0;
        } else {
            return 1;        
        }
    }
    function list_gift($pdo){
        $sql = "SELECT * FROM `gift`";
        $stmt = $pdo->prepare($sql);
        if($stmt->execute()){
            $ret = $stmt->fetchAll();
            echo "<pre>";
            print_r($ret);
            echo "</pre>";
        } else {
            echo "NO";
        }
    }
    function get_name_by_hash($pdo, $hash){
        $sql = "SELECT * FROM `gift` WHERE `hash` = ?";
        $stmt = $pdo->prepare($sql);
        if(!$stmt)
            echo "prepare fail";
        $ret = $stmt->bindValue(1, $hash, PDO::PARAM_STR);
        if(!$ret)
            echo "bind fail";
        if($stmt->execute()){
            $ret = $stmt->fetch();
            if(!ret)
                return FALSE;
            return $ret;
        } else {
            echo "QAQ";
        }
    }
    function get_receiver_by_hash($pdo, $hash){
        $sql = "SELECT * FROM `gift` WHERE `hash` = ?";
        $stmt = $pdo->prepare($sql);
        if(!$stmt)
            echo "prepare fail";
        $ret = $stmt->bindValue(1, $hash, PDO::PARAM_STR);
        if(!$ret)
            echo "bind fail";
        if($stmt->execute()){
            $ret = $stmt->fetch();
            
            if(!$ret || $stmt->rowCount() == 0)
                return FALSE;
            $id=$ret["id"];
        } else {
            return FALSE;
        }
        $sql = "SELECT * FROM `gift`";
        $stmt = $pdo->prepare($sql);
        if($stmt->execute()){ 
            $ret = $stmt->fetchAll();
            $count = $stmt->rowCount();
            $receiver_id = ($id + 2) % $count;
            return $ret[$receiver_id];
        } else {
            return FALSE; 
        }
    }
?>
