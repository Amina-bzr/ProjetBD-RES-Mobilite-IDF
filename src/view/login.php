<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
    <link rel="stylesheet" href="./css/formStyle.css">
</head>

<body>

    <div class="login-container">
        <h1>Se Connecter</h2>
        <form action="../routes/userRouter.php" method="post" class="login-form">
            <input type="text" name="adresseMail" placeholder="Username" required>
            <input type="password" name="mdp" placeholder="Password" required>
            <button type="submit">Se Connecter</button>
        </form>
    </div>

</body>

</html>
