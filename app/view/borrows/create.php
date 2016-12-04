<div class="row">
	<form class="col s12" action="<?php echo URL . "borrows/store" ?>" method="post">
		<div class="row">
			<div class="input-field col s12">
				<select name="member_id" required aria-required="true">
					<option disabled selected value="">Pilih Peminjam Buku</option>
					<?php
					foreach($members as $member) {
						echo '<option value="' . $member->id . '">' . $member->name . '</option>';
					}
					?>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<select name="book_id" required aria-required="true">
					<option disabled selected value="">Pilih Judul Buku</option>
					<?php
					foreach($books as $book) {
						echo '<option value="' . $book->id . '">' . $book->title . '</option>';
					}
					?>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<label for="due_date">Tanggal Pengembalian</label>
				<input type="date" name="due_date" class="datepicker">
			</div>
		</div>

		<div class="row">
			<div class="input-field col s6">
				<button class="btn waves-effect waves-light blue-grey" type="submit" name="action">Tambah</button>
			</div>
			<div class="input-field col s6">
				<a href="<?php echo URL . "borrows" ?>" class="btn waves-effect waves-light grey lighten-2 grey-text right" >Batal</a>
			</div>
		</div>
	</form>
</div>
