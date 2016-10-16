<form action="<?php echo URL . "books/update" ?>" method="post">
	<?php echo $book->isbn ?>
	<input type="text" name="isbn" value="<?php echo $book->isbn ?>" hidden="true">
	<input type="text" name="title" placeholder="Judul" value="<?php echo $book->title ?>">
	<input type="text" name="author" placeholder="Penulis" value="<?php echo $book->author ?>">
	<input type="text" name="publisher" placeholder="Penerbit" value="<?php echo $book->publisher ?>">
	<input type="number" name="year" placeholder="Tahun" value="<?php echo $book->year ?>">
	<input type="submit">
	<a href="<?php echo URL . "books" ?>">Cancel</a>
</form>
