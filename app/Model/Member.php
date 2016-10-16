<?php

namespace App\Model;

use App\Core\Model;

class Member extends Model {

	public function all() {
		$sql = "SELECT id, name, address FROM member";
		$query = $this->db->prepare($sql);
		$query->execute();

		return $query->fetchAll();
	}

	public function add($args) {

		$sql = "INSERT INTO member (name, address, contact) VALUES (:name, :address, :contact)";
		$query = $this->db->prepare($sql);

		$params = [
			':name' => $args['name'],
			':address' => $args['address'],
			':contact' => $args[':contact']
		];

		return $query->query($params);
	}

}