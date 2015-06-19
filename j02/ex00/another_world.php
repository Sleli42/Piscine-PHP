#!/usr/bin/php
<?PHP

if ($argc > 1)
{
	echo  (preg_replace('/#[\s+\t+]#/', ' ', trim($argv[1])));
	echo ("\n");
}
else
	return;
?>
