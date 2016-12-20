<?php
	function MoneyFormat($string){
		return preg_replace("(000)", ".000", $string);
	}
?>