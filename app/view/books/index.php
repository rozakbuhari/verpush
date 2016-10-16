<a href="<?php echo URL . "books/create/" ?>">Create</a>
<table>
<tr>
	<th>ISBN</th>
	<th>JUDUL</th>
	<th>PENULIS</th>
	<th>TAHUN</th>
	<th>PENERBIT</th>
	<th>ACTION</th>
</tr>
<?php
foreach ($books as $book) {
	echo "<tr>";
		echo "<td>". $book->isbn ."</td>";
		echo "<td>". $book->title ."</td>";
		echo "<td>". $book->author ."</td>";
		echo "<td>". $book->year ."</td>";
		echo "<td>". $book->publisher ."</td>";
		echo "<td>";
			echo "<a href='" . URL . "books/edit/". $book->isbn . "'>Edit</a> ";
			echo "<a href='" . URL . "books/delete/". $book->isbn . "'>Delete</a>";
		echo "</td>";
	echo "</tr>";
}
?>

</table>
