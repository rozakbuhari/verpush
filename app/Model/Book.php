<?php

namespace App\Model;

use App\Core\Model;

class Book extends Model {

	public function all() {
		$sql = "SELECT * FROM book";
		$query = $this->db->prepare($sql);
		$query->execute();

		return $query->fetchAll();
	}

    public function get($id) {
      $sql = "SELECT * FROM book WHERE id = :id LIMIT 1";
      $query = $this->db->prepare($sql);
      $parameters = [':id' => $id];
      $query->execute($parameters);

      // fetch() is the PDO method that get exactly one result
      return $query->fetch();
    }

	public function add($args) {
      $sql = "INSERT INTO book (isbn, title, author, publisher, year) VALUES (:isbn, :title, :author, :publisher, :year)";
      $query = $this->db->prepare($sql);
      $parameters = [':isbn' => $args['isbn'],
      				':title' => $args['title'],
      				':author' => $args['author'],
      				':publisher' => $args['publisher'],
      				':year' => $args['year']
      			];
      return $query->execute($parameters);
    }

	public function update($params) {
	   $sql = "UPDATE book
		 	   SET title = :title, author = :author, publisher = :publisher, year = :year
			   WHERE isbn = :isbn";
	   $query = $this->db->prepare($sql);
	   $parameters = array(
			 ':title' => $params['title'],
			 ':author' => $params['author'],
			 ':publisher' => $params['publisher'],
			 ':year' => $params['year'],
			 ':isbn' => $params['isbn']
		 );

	   $query->execute($parameters);

		 return $query->rowCount();
	}

	public function delete($id) {
	    $sql = "DELETE FROM book WHERE id = :id";
	    $query = $this->db->prepare($sql);
	    $parameters = array(':id' => $id);

	    // useful for debugging: you can see the SQL behind above construction by using:
	    // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

	    $query->execute($parameters);

		return $query->rowCount();
	}

}
