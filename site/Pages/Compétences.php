<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
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

        /* Menu de navigation */
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
            animation: underline 0.3s forwards;
        }

        .menu ul li a i {
            margin-right: 8px;
            transition: transform 0.2s;
        }

        .menu ul li a:hover i {
            transform: scale(1.2);
        }

        /* Style pour le contenu principal */
        .content {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #333;
            font-size: 2.5em;
            margin-top: 0;
            animation: fadeIn 0.5s;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        section {
            padding: 10px;
            margin-bottom: 5px;
            animation: slideIn 0.5s forwards;
            animation-delay: 0.5s;
            background-color: transparent;
            border: none;
        }

        p {
            margin: 0 0 1px 0;
            padding: 0;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
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

    <!-- Menu de navigation -->
    <div class="menu">
        <ul>
            <li>
                <a href="../../index.php">
                    <i class="fas fa-home"></i> Accueil
                </a>
            </li>
            <li>
                <a href="Compétences.php">
                    <i class="fas fa-tools"></i> Compétences
                </a>
            </li>
            <li>
                <a href="#Réalisations">
                    <i class="fas fa-trophy"></i> Réalisations
                </a>
            </li>
            <li>
                <a href="#Formations">
                    <i class="fas fa-graduation-cap"></i> Formations
                </a>
            </li>
            <li>
                <a href="contact.php">
                    <i class="fas fa-envelope"></i> Contact
                </a>
            </li>
        </ul>
    </div>

    <!-- Contenu dynamique généré par PHP -->
<div class="content">
    <?php
    require_once("../vendor/autoload.php");
    use Symfony\Component\Yaml\Yaml;

    // Chargement du fichier YAML
    $yamlFile = '../Portfolio/site/Pages/Compétences.yaml';
    try {
        $data = Yaml::parseFile($yamlFile);
        echo "<h1>" . htmlspecialchars($data["titre"]) . "</h1>\n"; // Affichage du titre de la page avec protection contre les XSS
    
        // Parcours des domaines
        foreach ($data["domaines"] as $domaine) {
            echo "<section class='domaine'><h2><strong>" . ucfirst(htmlspecialchars($domaine["nom"])) . "</strong></h2>\n"; // Affichage du nom du domaine
            
            // Parcours des catégories dans chaque domaine
            foreach ($domaine["categories"] as $categorie) {
                echo "<div class='categorie'><h3>" . htmlspecialchars($categorie["nom"]) . "</h3>\n"; // Affichage du nom de la catégorie

                // Vérification et parcours des compétences dans chaque catégorie
                if (is_array($categorie["competences"])) {
                    echo "<ul class='competences'>\n";
                    foreach ($categorie["competences"] as $competence) {
                        // Affichage de la compétence avec son niveau
                        echo "<li><strong>" . htmlspecialchars($competence["nom"]) . "</strong> : " . htmlspecialchars($competence["niveau"]) . " %</li>\n";
                    }
                    echo "</ul>\n";
                }
                echo "</div>\n"; // Fin de la catégorie
            }
            echo "</section>\n"; // Fin du domaine
        }
    } catch (Exception $e) {
        echo "<p>Erreur lors du chargement du fichier YAML: " . $e->getMessage() . "</p>";
    }
    ?>
</div>
</body>
</html>
