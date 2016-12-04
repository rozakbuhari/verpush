<?php

namespace App\Model;

use App\Core\Model;

class User extends Model {

	public function all() {
		$sql = "SELECT * FROM user";
		$query = $this->db->prepare($sql);
		$query->execute();

		return $query->fetchAll();
	}

    public function get($id) {
      $sql = "SELECT * FROM user WHERE id = :id LIMIT 1";
      $query = $this->db->prepare($sql);
      $parameters = [':id' => $id];
      $query->execute($parameters);

      return $query->fetch();
    }

	public function getWhere($filter) {

		$sql = "SELECT * FROM user WHERE `username` = :username AND `password` = :password LIMIT 1";

		$query = $this->db->prepare($sql);
		$parameters = [
			':username' => $filter['username'],
			':password' => $filter['password']
		];
		$query->execute($parameters);

		return $query->fetch();
	}

}
