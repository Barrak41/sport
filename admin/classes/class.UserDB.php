<?php 

/**/

require_once('class.databank.php');
require_once('class.User.php');

class UserDB extends databank{

	public function __construct(){
		parent::__construct();
		$sql = "
			CREATE TABLE IF NOT EXISTS `User` (
				`updated` Datetime  NOT NULL default CURRENT_TIMESTAMP ,
				`created` Datetime  NOT NULL default CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP ,
				`first_name` Varchar(255)  NOT NULL  ,
				`last_name` Varchar(255)  NOT NULL  ,
				`id` Int(11)  NOT NULL AUTO_INCREMENT,
				`email` Varchar(255)  NOT NULL  ,
				`password` Varchar(255)  NOT NULL  ,
				PRIMARY KEY (`id`) 
			) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;";
		try {
	        $connection = $this->connect();
	        $connection->exec($sql);
	        return true;
	    }catch (PDOException $e) {
	        return false;
	    }
	}

	public function insertAsObject($object){
		$connection = $this->connect(); 
				$stmt = $connection->prepare("insert into User values(now(),now(),:first_name,:last_name,null,:email,:password);");
		$stmt->bindParam(":first_name", $object->first_name);
		$stmt->bindParam(":last_name", $object->last_name);
		$stmt->bindParam(":email", $object->email);
		$stmt->bindParam(":password", $object->password);
		return $stmt->execute();
	}

	public function getAll(){
		$connection = $this->connect(); 
		$sql = "SELECT * FROM User";
		$result = $connection->query($sql);
		return $result->fetchAll(PDO::FETCH_OBJ);
	}

	public function getByKey($key){
		$connection = $this->connect(); 
		$stmt = $connection->prepare("SELECT * FROM User WHERE id = :id");
		$stmt->bindParam(":id", $key);
		$stmt->execute();
		return $stmt->fetchObject("User");
	}
	public function getByEmail($email){
		$connection = $this->connect(); 
		$stmt = $connection->prepare("SELECT * FROM user WHERE email = :email");
		$stmt->bindParam(":email", $email);
		$stmt->execute();
		return $stmt->fetchObject("User");
	}

	public function update($object){
		$connection = $this->connect(); 
		$sql= "update User set updated = now(),first_name = :first_name,last_name = :last_name,email = :email,password = :password where id= :id";
		$stmt = $connection->prepare($sql);
		$stmt->bindParam(":first_name", $object->first_name);
		$stmt->bindParam(":last_name", $object->last_name);
		$stmt->bindParam(":id", $object->id);
		$stmt->bindParam(":email", $object->email);
		$stmt->bindParam(":password", $object->password);
		return $stmt->execute();
	}

	public function delete($id){
		$connection = $this->connect();
		$stmt = $connection->prepare("DELETE FROM User WHERE id = :id");	
		$stmt->bindParam(":id", $id);
		$stmt->execute();
	}

}
?>