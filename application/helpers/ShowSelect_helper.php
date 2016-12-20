<?php
	function ShowSelect($info, $f, $s, $select = ""){
		foreach ($info as $item) {
			if ($item[$f] == $select)
				echo "<option selected value='$item[$f]'>$item[$s]</option>";
			else echo "<option value='$item[$f]'>$item[$s]</option>";
		}
	}
?>