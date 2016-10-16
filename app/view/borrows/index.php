<a href="<?= URL ?>borrows/create">Create</a>

<table>
	<tr>
		<th>Member</th>
		<th>Juduk Buku</th>
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


