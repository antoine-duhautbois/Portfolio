<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>
    
    <!-- Lien vers Google Fonts pour la police Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Lien vers FontAwesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            margin: 0;
            padding: 0;
            background: linear-gradient(80deg, #e0f7fa, #80deea);
            color: #333;
        }

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

        .menu ul li a:hover:before {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            right: 0;
            height: 2px;
            background-color: #ff5722;
            transform: scaleX(1);
            animation: underline 0.1s forwards;
        }

        .menu ul li a i {
            margin-right: 8px;
            transition: transform 0.2s;
        }

        .menu ul li a:hover i {
            transform: scale(1.2);
        }

        h1 {
            color: #333;
            text-align: center;
            font-size: 2.5em;
            margin-top: 0;
        }

        section {
            padding: 20px;
            margin: 20px auto;
            max-width: 800px;
            text-align: center;
        }

        p {
            font-size: 1.1em;
            color: #555;
            margin-bottom: 15px;
        }

        .photo {
            display: block;
            margin: 20px auto;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #00796b;
        }

        .github-logo {
            display: block;
            margin: 40px auto;
            text-align: center;
        }

        .github-logo img {
            width: 60px; /* Taille réduite à 60px */
            transition: transform 0.3s;
        }

        .github-logo img:hover {
            transform: scale(1.1);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes underline {
            0% {
                transform: scaleX(0);
            }
            100% {
                transform: scaleX(1);
            }
        }
    </style>
</head>

<body>

   <!-- Menu navigation -->
    <div class="menu">
        <ul>
            <li>
                <a href="../index.php">
                    <i class="fas fa-home"></i> Accueil
                </a>
            </li>
            <li>
                <a href="../site/Pages/Compétences.php">
                    <i class="fas fa-tools"></i> Compétences
                </a>
            </li>
            <li>
                <a href="../site/Pages/Réalisations.php">
                    <i class="fas fa-trophy"></i> Réalisations
                </a>
            </li>
            <li>
                <a href="#Formations">
                    <i class="fas fa-graduation-cap"></i> Formations
                </a>
            </li>
            <li>
                <a href="../site/Pages/contact.php">
                    <i class="fas fa-envelope"></i> Contact
                </a>
            </li>
        </ul>
    </div>

    <h1>Présentation</h1>
    <center>
        <h3>Bienvenue sur ma page de Portfolio. Vous êtes actuellement sur la page de présentation (Accueil)</h3>
    </center>

    <img src="/site/Extras/photo-profil.jpg" alt="Ma photo" class="photo">

    <section>
    <?php
    require_once("../vendor/autoload.php");
    use Symfony\Component\Yaml\Yaml;
    $yamlFile = '../Portfolio/site/Pages/Acceuil.yaml';

    try {
        $data = Yaml::parseFile($yamlFile);
        
        foreach ($data["prenom"] as $prenom) {
            echo "<p><strong>" . ucfirst(htmlspecialchars($prenom["nom"])) . "</strong> : " . htmlspecialchars($prenom["pseudo"]) . "</p>\n";
        }

        foreach ($data["famille"] as $nom) {
            echo "<p><strong>" . ucfirst(htmlspecialchars($nom["nom"])) . "</strong> : " . htmlspecialchars($nom["famille"]) . "</p>\n";
        }

        foreach ($data["accroche"] as $descriptif) {
            echo "<p>" . nl2br(htmlspecialchars($descriptif["descriptif"])) . "</p>\n";
        }

        foreach ($data["presentation"] as $descriptif) {
            echo "<p>" . nl2br(htmlspecialchars($descriptif["descriptif"])) . "</p>\n";
        }
        
    } catch (Exception $e) {
        echo '<p style="color:red;">Erreur lors du chargement du fichier YAML : ' . htmlspecialchars($e->getMessage()) . '</p>';
    }
    ?>
    </section>

    <div class="github-logo">
        <a href="https://github.com/antoine-duhautbois" target="_blank">
            <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="GitHub Logo">
        </a>
    </div>

</body>
</html>
