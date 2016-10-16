<?php

namespace App\Model;

use App\Core\Model;

class Member extends Model {

	public function all() {
		$sql = "SELECT * FROM member";
		$query = $this->db->prepare($sql);
		$query->execute();

		return $query->fetchAll();
	}

	public function get($id) {
		$sql = "SELECT * FROM member WHERE id = :id";
		$select = $this->db->prepare($sql);
		$params = [
			':id' => $id
		];
		$select->execute($params);

		return $select->fetch();
	}

	public function add($args) {

		$sql = "INSERT INTO member (name, address, contact) VALUES (:name, :address, :contact)";
		$insert = $this->db->prepare($sql);
		$params = [
			':name' => $args['name'],
			':address' => $args['address'],
			':contact' => $args['contact']
		];
		$insert->execute($params);

		return $insert->rowCount();
	}

	public function update($id, $params) {
		$sql = "UPDATE member
		 		SET name = :name, address = :address, contact = :contact
				WHERE id = :id";
		$query = $this->db->prepare($sql);
		$parameters = array(
			':id' => $id,
			':name' => $params['name'],
			':address' => $params['address'],
			':contact' => $params['contact']
		);
		$query->execute($parameters);

		return $query->rowCount();
	}

}
