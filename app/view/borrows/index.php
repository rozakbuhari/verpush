<?php if (count($borrows)) { ?>
<table class="responsive-table highlight">
	<tr>
		<th>Member</th>
		<th>Judul Buku</th>
		<th>Tanggal Pinjam</th>
		<th>Tanggal Pengembalian</th>
	</tr>
<?php
foreach ($borrows as $borrow) {
	echo '<tr>';
	echo '<td>' . $borrow['member']->name . '</td>';
	echo '<td>' . $borrow['book']->title . '</td>';
	echo '<td>' . $borrow['date'] . '</td>';
	echo '<td>' . $borrow['due_date'] . '</td>';
	echo '</tr>';
} ?>
</table>
<?php } else { ?>
	<p class="center-align">Tidak ada data pinjaman buku. <a href="<?php echo URL . "borrows/create/" ?>">klik</a> untuk menambah pinjaman baru</p>
<?php } ?>

<div class="fixed-action-btn" style="bottom: 50px; right: 48px;">
	<a class="btn-floating btn-large red hoverable" href="<?php echo URL . "borrows/create" ?>">
		<i class="large material-icons">add</i>
	</a>
</div>
