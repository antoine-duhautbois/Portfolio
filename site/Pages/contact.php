<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
    
    <!-- Lien vers Google Fonts pour la police Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Lien vers FontAwesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* Style général du corps de la page */
        body {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            margin: 0;
            padding: 0;
            background: linear-gradient(80deg, #e0f7fa, #80deea); /* Dégradé clair */
            color: #333;
        }

        /* Style du menu */
        .menu {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            animation: fadeIn 0.5s;
        }

        .menu ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        .menu ul li {
            display: inline;
            margin-right: 30px;
            position: relative;
        }

        .menu ul li a {
            color: #00796b;
            text-decoration: none;
            font-weight: bold;
            padding: 12px 20px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
            display: inline-flex;
            align-items: center;
            position: relative;
        }

        .menu ul li a:hover {
            background-color: #00796b;
            color: #fff;
            animation: bounce 1s forwards;
        }

        /* Style pour le formulaire */
        .contact-form {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 20px auto;
            animation: fadeIn 1s;
        }

        .contact-form h2 {
            text-align: center;
            color: #00796b;
        }

        .contact-form label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .contact-form button {
            width: 100%;
            padding: 12px;
            background-color: #00796b;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .contact-form button:hover {
            background-color: #004d40;
        }

        /* Style du message RGPD */
        .rgpd-message {
            background-color: #fff8e1;
            border: 1px solid #ffb74d;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            color: #f57c00;
            font-size: 0.9em;
            text-align: center;
            font-style: italic;
        }
    </style>

    <!-- hCaptcha -->
    <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
</head>

<body>

    <!-- Menu de navigation -->
    <div class="menu">
        <ul>
            <li><a href="../../index.php"><i class="fas fa-home"></i> Accueil</a></li>
            <li><a href="Compétences.php"><i class="fas fa-tools"></i> Compétences</a></li>
            <li><a href="Réalisations.php"><i class="fas fa-trophy"></i> Réalisations</a></li>
            <li><a href="#Formations"><i class="fas fa-graduation-cap"></i> Formations</a></li>
            <li><a href="contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
        </ul>
    </div>

    <!-- Message RGPD -->
    <div class="rgpd-message">
        <strong>Conformément au RGPD :</strong> Les informations saisies dans ce formulaire ne seront utilisées que pour répondre à votre demande. Aucune donnée personnelle ne sera conservée ou transmise à des tiers.
    </div>

    <!-- Formulaire de contact -->
    <div class="contact-form">
        <h2>Contactez-moi</h2>
        <p style="text-align: center; color: #00796b; font-size: 18px;">Si vous avez des questions, n'hésitez pas à me les poser !</p>
        <form action="process-form.php" method="POST">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" required>

            <label for="email">E-mail :</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <!-- hCaptcha -->
            <div class="h-captcha" data-sitekey="35aadfac-2ea6-451c-a572-729496a628a8"></div>

            <button type="submit">Envoyer</button>
        </form>
    </div>

</body>
</html>
