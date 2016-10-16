<?php

namespace App\Model;

use App\Core\Model;

class Book extends Model {

	public function all() {

    	$sql = "SELECT isbn, title, author, publisher, year FROM book";
    	$query = $this->db->prepare($sql);
    	$query->execute();

       // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
       // core/controller.php! If you prefer to get an associative array as the result, then do
       // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
       // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
       return $query->fetchAll();

	}

  public function get($isbn) {
      $sql = "SELECT isbn, title, author, publisher, year FROM book WHERE isbn = :isbn LIMIT 1";
      $query = $this->db->prepare($sql);
      $parameters = [':isbn' => $isbn];

      // useful for debugging: you can see the SQL behind above construction by using:
      // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

      $query->execute($parameters);

      // fetch() is the PDO method that get exactly one result
      return $query->fetch();
  }

	public function add($args) {
      $sql = "INSERT INTO book (isbn, title, author, publisher, year)
      			VALUES (:isbn, :title, :author, :publisher, :year)";
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

	public function delete($isbn) {
	    $sql = "DELETE FROM book WHERE isbn = :isbn";
	    $query = $this->db->prepare($sql);
	    $parameters = array(':isbn' => $isbn);

	    // useful for debugging: you can see the SQL behind above construction by using:
	    // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

	    $query->execute($parameters);

			return $query->rowCount();
	}

 //    /**
 //     * Delete a song in the database
 //     * Please note: this is just an example! In a real application you would not simply let everybody
 //     * add/update/delete stuff!
 //     * @param int $song_id Id of song
 //     */


 //    /**
 //     * Get a song from database
 //     * @param integer $song_id
 //     */
 //    public function getSong($song_id)
 //    {
 //        $sql = "SELECT id, artist, track, link FROM song WHERE id = :song_id LIMIT 1";
 //        $query = $this->db->prepare($sql);
 //        $parameters = array(':song_id' => $song_id);

 //        // useful for debugging: you can see the SQL behind above construction by using:
 //        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

 //        $query->execute($parameters);

 //        // fetch() is the PDO method that get exactly one result
 //        return $query->fetch();
 //    }

 //    /**
 //     * Update a song in database
 //     * // TODO put this explaination into readme and remove it from here
 //     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
 //     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
 //     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
 //     * in the views (see the views for more info).
 //     * @param string $artist Artist
 //     * @param string $track Track
 //     * @param string $link Link
 //     * @param int $song_id Id
 //     */


 //    /**
 //     * Get simple "stats". This is just a simple demo to show
 //     * how to use more than one model in a controller (see application/controller/songs.php for more)
 //     */
 //    public function getAmountOfSongs()
 //    {
 //        $sql = "SELECT COUNT(id) AS amount_of_songs FROM song";
 //        $query = $this->db->prepare($sql);
 //        $query->execute();

 //        // fetch() is the PDO method that get exactly one result
 //        return $query->fetch()->amount_of_songs;
 //    }

}
