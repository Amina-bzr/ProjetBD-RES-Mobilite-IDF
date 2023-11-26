<?php
	
	session_start();
	if (isset($_SESSION['userId'])) {
    	// Si pas connecté redirect vers la page de login
    		header("Location: login.php");
   	 	exit();
   	 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lignes</title>
    <link rel="stylesheet" href="./css/lignesStyle.css">
</head>
<body>

    <header>
        <h1>Lignes</h1>
    </header>

    <nav>
        <a href="lignes.php">Lignes</a>
        <a href="horraires.php">Horraires</a>
        <a href="forfaits.php">Mes Forfaits</a>
        <a href="assistants.php">Assistants</a>
        <a href="profile.php">Mon Profil</a>
    </nav>

    <section>
        <?php
        echo'<div class="lignes-container">';
        require '../routes/lignesRouter.php';
        ?>
    </section>

</body>
</html>


