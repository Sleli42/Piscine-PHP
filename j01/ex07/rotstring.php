#!/usr/bin/php
<?PHP

function ft_split($str)
{
	$str = trim($str);
	$str = explode(" ", $str);
	$str = array_filter($str);
	return ($str);
}

function tab_len($s)
{
	$i = 0;

	while ($s[$i])
		$i++;
	return ($i);
}

function rotstring($s)
{
	$s = ft_split($s);
	$i = tab_len($s) - 1;
	$swap = $s[0];
	$s[0] = $s[$i];
	$s[$i] = $swap;
	return ($s);
}

if ($argc > 1)
{
	$i = 0;
	$array = rotstring($argv[1]);
	while ($array[$i])
	{
		trim($array[$i]);
		echo("$array[$i]");
		if ($i + 1 != tab_len($array))
			echo(" ");
		$i++;
	}
	echo("\n");
}

?>
