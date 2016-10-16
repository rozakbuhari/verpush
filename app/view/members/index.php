
<a href="<?= URL ?>members/create">Create</a>
<table>
	<tr>
		<th>UID</th>
		<th>NAMA</th>
		<th>ALAMAT</th>
	</tr>
<?php
	foreach ($members as $member) {
		echo "<tr>";
		echo "<td>". $member->id ."</td>";
		echo "<td>". $member->name ."</td>";
		echo "<td>". $member->address ."</td>";
		echo "</tr>";
	}
?>
</table>