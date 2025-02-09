<?php
	if ($count_groups > 0) {
		$groups_link = 'groups.php?member='.$row["id"];
		$groups_button = 'btn-primary';
	}
	else {
		$groups_link = 'javascript:void(0);';
		$groups_button = 'disabled';
	}
?>