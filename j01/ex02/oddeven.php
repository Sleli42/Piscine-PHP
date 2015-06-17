#!/usr/bin/php
<?PHP

while (1)
{
	echo ("Entrez un nombre: ");
	if ($value = fgets(STDIN))
	{
		$value = trim($value);
		if (is_numeric($value))
		{
			if ($value % 2)
				echo("Le chiffre $value est Impair\n");
			else
				echo("Le chiffre $value est Pair\n");
		}
		else
			echo("'$value' n'est pas un chiffre\n");
	}
	else
	{
		return ;
	}
}

?>
