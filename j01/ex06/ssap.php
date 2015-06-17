#!/usr/bin/php
<?PHP

if ($argc > 1)
{
	$i = 1;
	$j = 0;
	while ($i != $argc)
		$dup[$j++] = $argv[$i++];
	$j = 0;
	sort($dup);
	while ($dup[$j])
	{
		echo("$dup[$j]\n");
		$j++;
	}
}
else
	return ;

?>
