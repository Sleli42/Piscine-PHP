#!/usr/bin/php
<?PHP

if ($argc > 1)
{
	if ($argc == 4)
	{
		$val1 = intval($argv[1]);
		$op = trim($argv[2]);
		$val2 = intval($argv[3]);
		if ($op == "+")
			echo ($val1 + $val2."\n");
		else if ($op == "-")
			echo ($val1 - $val2."\n");
		else if ($op == "-")
			echo ($val1 - $val2."\n");
		else if ($op == "*")
			echo ($val1 * $val2."\n");
		else if ($op == "/")
			echo ($val1 / $val2."\n");
		else if ($op == "%")
			echo ($val1 % $val2."\n");
	}
}
else
	echo("Incorrect Parameters\n");

?>
