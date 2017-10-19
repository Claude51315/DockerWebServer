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
?>

<?php
	
	$account = $_POST['account'];
	$password = $_POST['password'];
	$userTable=connectDB();
	if($userTable != FALSE) {
	$ret = login($userTable, $account, $password);			
		if($ret != FALSE){
			//echo "login success!";
			echo "hello ! " . $ret;
		} else {
			echo "login fail!";
		}
	
	} else {
		echo "connect error!";
	}

?>
