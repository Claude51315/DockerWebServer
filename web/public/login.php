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
    $re = $pdo->query($sql);
		if($re->rowCount() == 0 )
			return FALSE;
		else 
			return TRUE;
	}
?>

<?php
	
	$account = $_POST['account'];
	$password = $_POST['password'];
	$userTable=connectDB();
	if($userTable != FALSE) {
	$ret = login($userTable, $account, $password);			
		if($ret == TRUE){
			echo "login success!";
		} else {
			echo "login fail!";
		}
	
	} else {
		echo "connect error!";
	}








?>
