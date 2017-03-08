<?php 

function connectToSQL()
{
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=m2l;charset=utf8', 'root', '');

		echo "ggwp";
	}
	catch (PDOException $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	return $bdd;
}

?>