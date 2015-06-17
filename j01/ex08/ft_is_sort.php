#!/usr/bin/php
<?PHP

function	ft_is_sort($array)
{
	$i = 0;
	$dup = $array;
	$cpy = $dup;
	sort($array);
	rsort($cpy);
	if (!($dup == $array) && !($cpy == $dup))
		return (0);
	return (1);
}

?>
