<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Compétences</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
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
            text-align: center;
        }

        .menu ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .menu ul li {
            display: inline;
            margin: 0 20px;
        }

        .menu ul li a {
            text-decoration: none;
            color: #00796b;
            font-weight: bold;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .menu ul li a:hover {
            background-color: #00796b;
            color: #fff;
        }

        .content {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            text-align: center;
        }

        .competence {
            margin: 30px 0;
        }

        .competence h2 {
            margin-bottom: 20px;
        }

        .bar-container {
            width: 100%;
            background-color: #e0e0e0;
            border-radius: 50px;
            box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .bar {
            height: 25px;
            border-radius: 50px;
            background: linear-gradient(90deg, #00796b, #4caf50);
            width: var(--width);
            transition: width 1s ease-in-out;
        }

        .pourcentage {
            font-size: 16px;
            color: #555;
            margin-top: 5px;
            font-weight: 600;
        }

        .footer {
            text-align: center;
            margin: 40px 0;
        }

        .github-logo {
            width: 40px;
            height: 40px;
            opacity: 0.8;
            transition: opacity 0.3s;
        }

        .github-logo:hover {
            opacity: 1;
        }
    </style>
</head>

<body>

    <!-- Menu de navigation -->
    <div class="menu">
        <ul>
            <li><a href="../../index.php"><i class="fas fa-home"></i> Accueil</a></li>
            <li><a href="Compétences.php"><i class="fas fa-tools"></i> Compétences</a></li>
            <li><a href="Réalisations.php"><i class="fas fa-trophy"></i> Réalisations</a></li>
            <li><a href="Formations.php"><i class="fas fa-graduation-cap"></i> Formations</a></li>
            <li><a href="contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
        </ul>
    </div>

    <!-- Section des compétences -->
    <div class="content">
        <h1>Mes Compétences</h1>
        <?php
        require_once(__DIR__ . '/../../../vendor/autoload.php');
        use Symfony\Component\Yaml\Yaml;

        $yamlFile = __DIR__ . '/Compétences.yaml';

        try {
            $data = Yaml::parseFile($yamlFile);

            foreach ($data["domaines"] as $domaine) {
                echo "<div class='competence'>";
                echo "<h2>" . htmlspecialchars($domaine["nom"]) . "</h2>";

                foreach ($domaine["categories"] as $categorie) {
                    echo "<h3>" . htmlspecialchars($categorie["nom"]) . "</h3>";

                    foreach ($categorie["competences"] as $competence) {
                        $niveau = htmlspecialchars($competence["niveau"]);
                        $nom = htmlspecialchars($competence["nom"]);

                        echo "<div class='bar-container'>";
                        echo "<div class='bar' style='--width: " . $niveau . "%; width: " . $niveau . "%;'></div>";
                        echo "</div>";
                        echo "<p class='pourcentage'>" . $nom . " - " . $niveau . "%</p>";
                    }
                }
                echo "</div>";
            }
        } catch (Exception $e) {
            echo "<p>Erreur lors du chargement du fichier YAML: " . $e->getMessage() . "</p>";
        }
        ?>
    </div>

    <!-- Footer avec le logo GitHub -->
    <div class="footer">
        <a href="https://github.com/antoine-duhautbois" target="_blank">
            <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="GitHub Logo" class="github-logo">
        </a>
    </div>

</body>
</html>
