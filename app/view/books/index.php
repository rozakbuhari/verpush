<table class="striped responsive-table">
<thead>
	<tr>
		<th>ISBN</th>
		<th>JUDUL</th>
		<th>PENULIS</th>
		<th>TAHUN</th>
		<th>PENERBIT</th>
		<th>ACTION</th>
	</tr>
</thead>
	<tbody>
<?php
foreach ($books as $book) {
	echo "<tr>";
		echo "<td>". $book->isbn ."</td>";
		echo "<td>". $book->title ."</td>";
		echo "<td>". $book->author ."</td>";
		echo "<td>". $book->year ."</td>";
		echo "<td>". $book->publisher ."</td>";
		echo "<td>";
			echo "<a href='" . URL . "books/edit/". $book->id . "' class='btn btn-floating'>";
			echo "<i class='material-icons'>edit</i></a> ";
			echo "<a href='" . URL . "books/delete/". $book->id . "' class='btn btn-floating'>";
			echo "<i class='material-icons'>delete</i></a> ";
	echo "</td>";
	echo "</tr>";
}
?>
	</tbody>
</table>

<div class="fixed-action-btn" style="bottom: 50px; right: 48px;">
	<a class="btn-floating btn-large red hoverable" href="<?php echo URL . "books/create/" ?>">
		<i class="large material-icons">add</i>
	</a>
</div>
