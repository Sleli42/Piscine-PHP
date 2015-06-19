<?PHP

  session_start();
  if ($_GET['login'] && $_GET['passwd'])
  {
    $_SESSION['login'] = $_GET['login'];
    $_SESSION['passwd'] = $_GET['passwd'];
  }

?>

<html>
<head>
  <meta charset="UTF-8"/>
</head>
<body>
  <form method="get" action="index.php">
    <p align="center">Login <input type="text" name="login" value="
    <?php

      if ($_SESSION['login'] == $_GET['login'])
        echo ($_SESSION['login']);

    ?>" />
    </p>
    <p align="center">Passwd <input type="text" name="passwd" value="
    <?php

      if ($_SESSION['passwd'] == $_GET['passwd'])
        echo ($_SESSION['passwd']);

      ?>" />
    </p>
    <p colspan="2" align="center"><input type="submit" name="submit" value="OK"/></p>
  </form>
</body>
</html>
