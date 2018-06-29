<?php 

namespace MonProjet\Model;


class Database {

	public function getDb() {

		$user = 'root';
		$pass = 'troiswa';
		$db = new \PDO('mysql:host=localhost;dbname=classicmodels' , $user , $pass , array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING));

		$db->exec('SET NAMES UTF8');

		return $db;
}

	public function getAllCustomers() {


		$db = $this->getDb();
		
		$sql = "SELECT * FROM customers";

		$statement = $db->query($sql, \PDO::FETCH_ASSOC);

		$customersList = [];

		foreach ($statement as $row) {
			$customersList[] = $row;
		}

		return $customersList;

	}

		public function getCustomersByCountry($country) {

		$db = $this->getDb();
		
		$sql = "SELECT * FROM `customers` WHERE country LIKE '$country'";

		$statement = $db->query($sql, \PDO::FETCH_ASSOC);

		$customersList = [];

		foreach ($statement as $row) {
			$customersList[] = $row;
		};

		return $customersList;

	}



	}
	



