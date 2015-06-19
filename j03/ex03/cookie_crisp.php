<?PHP

if ($_GET['action'] == "set")
{
	if (isset($_GET['name']) && isset($_GET['value']))
   		setcookie($_GET['name'], $_GET['value'], time() + 5000000);
   	else if (isset($_GET['name']))
   		setcookie($_GET['name'], "", time() + 5000000);
}
if ($_GET['action'] == "get")
	echo $_COOKIE[$_GET['name']]."\n";
if ($_GET['action'] == "del")
{
	if (isset($_GET['value']))
   		setcookie($_GET['name'], $_GET['value'], time()-300);
   	else
   		setcookie($_GET['name'], "", time()-300);
}

?>
