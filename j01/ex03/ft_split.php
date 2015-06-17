#!/usr/bin/php
<?PHP
	function ft_split($str)
	{
		$str = trim($str);
		$str = explode(" ", $str);
		$str = array_filter($str);
		sort($str);
		return ($str);
	}
?>
