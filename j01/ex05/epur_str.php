#!/usr/bin/php
<?PHP

if ($argc == 2)
{
	if ($str = $argv[1])
	{
		$str = eregi_replace("[ ]+", " ", $str);
		echo("$str\n");
	}
}
else
	return ;

?>
