<?PHP

if (isset($_GET["action"]) && isset($_GET["name"]))
{
	if ($_GET["action"] == 'set' && isset($_GET['value']))
    	setcookie($_GET['name'], $_GET['value']);
	if ($_GET["action"] == 'get' && isset($COOKIE[$_GET['name']])
	{
		echo ("FDP\n");
		echo $COOKIE[$_GET['name']];
	}
    if ($_GET["action"] == 'del')
    	setcookie($get['name'], $_GET['value'], time()-300);
}

?>
