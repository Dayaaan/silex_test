<?php

namespace MonProjet\Service;

class DatabaseService
{


	public function getConnection() {
		$bdd = new \PDO('mysql:host=localhost;dbname=classicmodels;charset=utf8', 'root', 'troiswa', array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));
		$bdd->exec('SET NAMES UTF8');
		return $bdd;
	}

	public function getCustomersByCountry($country) {


		$bdd = $this->getConnection();

		$sql = "SELECT * FROM customers WHERE country = ?";

		$statement = $bdd->prepare($sql);

		$statement->execute([$country]);

		$customers = $statement->fetchAll(\PDO::FETCH_ASSOC);

		return $customers;
	}
}