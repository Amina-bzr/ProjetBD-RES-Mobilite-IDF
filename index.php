<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Homepage</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #190101;
            color: #333;
        }


        nav {
            background-color: #3498db;
            display: flex;
            flex-direction:row;
            align-items:center;
            justify-content:right;
            color: #fff;
            padding: 2em 4em;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            margin-right: 4em;
            font-weight: bold;
        }

        .login-button {
            background-color: #fff;
            color: #3498db;
            padding: 1.2em 2.4em;
            border: 2px solid #3498db;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            margin-right:1em;
        }

        section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 2em;
            box-sizing: border-box;
        }

        .description-container {
        display: flex;
        flex-direction:column;
        font-size: 1.5em;
            color: #fff;
            padding: 2em;
            width: 40%;
            height:50vh;

        }

        .description-container h1 {
            margin-top: 2.5em;
        }

        .image-container {
            width: 50%;
        }

        .image-container img {
            width: 100%;
            border-radius: 10px;
        }
    </style>
</head>
<body>



    <nav>
        <a href="#">À propos</a>
        <a href="#">FAQ</a>
        <a class="login-button" href="src/view/login.php">Se Connecter</a>
    </nav>

    <section>
        <div class="description-container">
            <h1>Bienvenue sur IDF Mobilités!</h2>
            <p>Trouvez le bon itinéraire pour tous vos déplacements à Paris et en Île-de-France avec le site SNCF de Paris et sa banlieue.</p>
        </div>

        <div class="image-container">
            <img src="https://mesinfos.fr/content/articles/503/A178503/initial-ile-france-mobilite.jpg" alt="Website Image"> 
        </div>
    </section>

</body>
</html>


