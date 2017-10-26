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
        $sql = sprintf("INSERT INTO `gift` (`Name`, `adj1`, `adj2`, `email`) VALUES ('%s', '%s', '%s', '%s');", 
        $gift["name"], 
        $gift["adj1"],
        $gift["adj2"],
        $gift["email"]);
        $stmt = $pdo->prepare($sql);
        if($stmt->execute()){
            echo "YES";
        } else {
            echo "NO";
        }
        return 0;            
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
?>
