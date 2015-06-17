#!/usr/bin/php
<?PHP

if ($argc > 1)
{
	$i = 0;
	$str = implode(" ", $argv);
	$str = explode(" ", $str);
	$str = array_filter($str, 'strlen');
	unset($str[0]);
	foreach ($str as $test)
	{
		if (ctype_alpha($test[0]))
			$alpha[] = $test;
		else if (is_numeric($test))
			$num[] = $test;
		else
			$spec[] = $test;
	}
	natcasesort($alpha);
	rsort($num, SORT_NUMERIC);
	sort($spec);
	$yolo = array_merge($alpha, $num, $spec);
	foreach ($yolo as $display)
		echo ($display."\n");
}
else
	return ;

?>
