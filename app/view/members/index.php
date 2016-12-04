<?php if (count($members)) { ?>
<table class="responsive-table highlight">
	<tr>
		<th>UID</th>
		<th>NAMA</th>
		<th>ALAMAT</th>
		<th>KONTAK</th>
		<th>ACTION</th>
	</tr>
<?php
	foreach ($members as $member) {
		echo "<tr>";
		echo "<td>". $member->id ."</td>";
		echo "<td>". $member->name ."</td>";
		echo "<td>". $member->address ."</td>";
		echo "<td>". $member->contact ."</td>";
		echo "<td>";
		echo "<ul>";
		echo "<a href='" . URL . "members/edit/". $member->id . "' class='btn btn-floating'>";
		echo "<i class='material-icons'>edit</i></a> ";
		echo "</ul>";
		echo "</td>";
		echo "</tr>";
	}
?>
</table>
<?php } else { ?>
	<p class="center-align">Tidak ada data members. <a href="<?php echo URL . "members/create/" ?>">klik</a> untuk menambah member baru</p>
<?php } ?>

<div class="fixed-action-btn" style="bottom: 50px; right: 48px;">
	<a class="btn-floating btn-large red hoverable" href="<?php echo URL . "members/create/" ?>">
		<i class="large material-icons">add</i>
	</a>
</div>