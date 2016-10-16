
<a href="<?= URL ?>members/create">Create</a>
<table>
	<tr>
		<th>UID</th>
		<th>NAMA</th>
		<th>ALAMAT</th>
		<th>KONTAK</th>
	</tr>
<?php
	foreach ($members as $member) {
		echo "<tr>";
		echo "<td>". $member->id ."</td>";
		echo "<td>". $member->name ."</td>";
		echo "<td>". $member->address ."</td>";
		echo "<td>". $member->contact ."</td>";
		echo "<td>";
		echo "<a href='" . URL . "members/edit/". $member->id . "'>Edit</a> ";
		echo "</td>";
		echo "</tr>";
	}
?>
</table>