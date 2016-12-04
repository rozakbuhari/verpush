<form action="<?php echo URL . "books/update" ?>" method="post">
	<h5 class="grey-text"><?= $book->isbn ?></h5>
	<input type="text" name="isbn" value="<?php echo $book->isbn ?>" hidden="true">
	<input type="text" name="title" placeholder="Judul" value="<?php echo $book->title ?>" required>
	<input type="text" name="author" placeholder="Penulis" value="<?php echo $book->author ?>" required>
	<div class="row">
		<div class="col s6">
			<input type="text" name="publisher" placeholder="Penerbit" value="<?php echo $book->publisher ?>" required>
		</div>
		<div class="col s6">
			<input type="number" name="year" placeholder="Tahun" value="<?php echo $book->year ?>" required>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s6">
			<button class="btn waves-effect waves-light blue-grey" type="submit" name="action">Perbarui</button>
		</div>
		<div class="input-field col s6">
			<a href="<?php echo URL . "books" ?>" class="btn waves-effect waves-light grey lighten-2 grey-text right" >Batal</a>
		</div>
	</div>
</form>
