<?php
namespace Classes;
//include 'Conn.php'; 
class Application {
	
	private $view;

	public function __construct(View $view) {
		$this->view = $view;
	}

	public function getGallery() {
		try {
			$dbh = new \PDO('mysql:dbname=my_test_bd; charset=UTF8; host=127.0.0.1', 'root', '');    
		}
		catch (\PDOException $e){
			echo "Erorr: Could not connect. ". $e->getMassage();
		}
		
		$dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
		
		$result= [];
		$statement = $dbh->prepare("SELECT * FROM gallery");
		$statement->execute();

		$result = $statement->fetchAll(\PDO::FETCH_ASSOC);

		$statement = null;
		$dbh= null;

		$this->view->render("gallery", array(
			'items' => $result
		));		
	}

	public function getPicture($id) {
		try {
			$dbh = new \PDO('mysql:dbname=my_test_bd; charset=UTF8; host=127.0.0.1', 'root', '');    
		}
		catch (\PDOException $e){
			echo "Erorr: Could not connect. ". $e->getMassage();
		}
		
		$dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
		
		
		$result= [];
		$statement = $dbh->prepare("SELECT * FROM gallery WHERE id_img = :id");
		$statement->bindValue(':id', $id, \PDO::PARAM_INT);
		$statement->execute();

		$result = $statement->fetchAll(\PDO::FETCH_ASSOC);

		$statement = null;
		$dbh= null;

		$this->view->render("picture", array(
			'picture' => $result
		));		
	}

}
