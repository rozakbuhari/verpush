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

	public function add($args) {

		$sql = "INSERT INTO user (username, password, fullname, email) VALUES (:username, :password, :fullname, :email)";
		$insert = $this->db->prepare($sql);
		$params = [
			':username' => $args['username'],
			':password' => $args['password'],
			':fullname' => $args['fullname'],
			':email' => $args['email']
		];
		$insert->execute($params);

		if ($insert->rowCount())  {
			$sql = "INSERT INTO user_role (user_id, role_id) VALUES (:user_id, :role_id)";
			$assignRole = $this->db->prepare($sql);
			$params = [
				'user_id' => $this->db->lastInsertId(),
				'role_id' => 2 // Basic user
			];
			$assignRole->execute($params);

			return $assignRole->rowCount();
		}
		return false;
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

	public function roles($user_id) {
		$sql = "SELECT role.* FROM role LEFT JOIN user_role ON user_role.role_id = role.id WHERE user_role.user_id = :user_id";

		$query = $this->db->prepare($sql);
		$parameters = [
			':user_id' => $user_id
		];
		$query->execute($parameters);

		return $query->fetchAll();
	}

}
