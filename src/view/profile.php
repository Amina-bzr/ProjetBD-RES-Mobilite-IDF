<?php
session_start();
// Verifier si l'utilisateur est connecté
if (isset($_SESSION['userId'])) {
    // Si pas connecté redirect vers la page de login
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="./css/profilStyle.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil utilisateur</title>
</head>
<body>

    <header>
        <h1>Mon Profil</h1>
    </header>

    <nav>
        <a href="lignes.php">Lignes</a>
        <a href="horraires.php">Horraires</a>
        <a href="forfaits.php">Mes Forfaits</a>
        <a href="assistants.php">Assistants</a>
        <a href="profile.php">Mon Profil</a>
    </nav>

    <section>
        <h2>Données personnelles</h2>
        <img src="https://www.hotelbooqi.com/wp-content/uploads/2021/12/128-1280406_view-user-icon-png-user-circle-icon-png.png" alt="User Icon" class="user-icon">
        <form action="../routes/userRouter.php" method="post" >
            <label for="prenom">Prenom:</label>
            <input type="text" id="prenom" name="prenom" value="<?php echo $_SESSION['prenom']?>" required readonly>

            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" value="<?php echo $_SESSION['nom']?>" required readonly>
            
            <label for="datenaissance">Date de naissance:</label>
            <input type="text" id="datenaissance" name="datenaissance" value="<?php echo $_SESSION['datenaissance']?>" required readonly>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $_SESSION['adressemail']?>" required readonly>

            <label for="civilite">Civilité:</label>
            <input type="text" id="civilite" name="civilite" value="<?php echo $_SESSION['civilite']?>" required readonly>

            <label for="tel">Telephone:</label>
            <input type="tel" id="tel" name="tel" value="<?php echo $_SESSION['tel']?>" required>
            
            <label for="adresse">Adresse:</label>
            <input type="text" id="adresse" name="adresse" value="<?php echo $_SESSION['adresse']?>" required readonly>

            <button type="submit">Modifier</button>
        </form>
    </section>

</body>
</html>
