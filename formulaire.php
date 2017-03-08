<!DOCTYPE html>
<html>
<head>
<?php include "head.php" ?> 
</head>
<body>
<?php include "navbar.php"  ?>

<p>
   
    Veuillez taper votre prénom:
</p>

<form action="cible.php" method="post">
<p>
    <input type="text" name="prenom" />
    <input type="submit" value="Valider" />
</p>
</form>
</body>
</html>