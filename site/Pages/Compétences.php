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
        }

        .menu ul li a {
            color: #00796b;
            text-decoration: none;
            font-weight: bold;
            padding: 12px 20px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .menu ul li a:hover {
            background-color: #00796b;
            color: #fff;
        }

        /* Style principal */
        .content {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        h1, h2 {
            margin-bottom: 20px;
        }

        section {
            margin: 30px 0;
            text-align: left;
        }

        /* Barres de compétences */
        .competence-container {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .competence-label {
            width: 150px;
            font-weight: bold;
            text-transform: capitalize;
        }

        .competence-bar {
            flex: 1;
            height: 20px;
            background-color: #e0e0e0;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
        }

        .bar {
            height: 100%;
            background-color: #00796b;
            width: 0;
            transition: width 4s ease-out;
        }

        .percentage {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 0.9em;
            color: #1deaac;
        }

        /* Animation pour déclencher au scroll */
        .animate {
            width: var(--target-width);
        }

        /* Footer avec logo GitHub */
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
            <li><a href="#Formations"><i class="fas fa-graduation-cap"></i> Formations</a></li>
            <li><a href="contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
        </ul>
    </div>

    <!-- Contenu PHP -->
    <div class="content">
        <?php
        require_once(__DIR__ . '/../../../vendor/autoload.php');
        use Symfony\Component\Yaml\Yaml;

        $yamlFile = __DIR__ . '/Compétences.yaml';

        try {
            $data = Yaml::parseFile($yamlFile);

            echo "<h1>" . htmlspecialchars($data["titre"]) . "</h1>\n";

            foreach ($data["domaines"] as $domaine) {
                echo "<section><h2>" . ucfirst(htmlspecialchars($domaine["nom"])) . "</h2>\n";

                foreach ($domaine["categories"] as $categorie) {
                    echo "<h3>" . htmlspecialchars($categorie["nom"]) . "</h3>\n";

                    foreach ($categorie["competences"] as $competence) {
                        $niveau = $competence["niveau"];
                        $nomCompetence = htmlspecialchars($competence["nom"]);

                        // Barre de progression avec animation
                        echo "<div class='competence-container'>";
                        echo "<div class='competence-label'>$nomCompetence</div>";
                        echo "<div class='competence-bar'>";
                        echo "<div class='bar' style='--target-width: $niveau%;'></div>";
                        echo "<span class='percentage'>$niveau%</span>";
                        echo "</div>";
                        echo "</div>";
                    }
                }
                echo "</section>\n";
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

    <!-- Script pour déclencher l'animation au scroll -->
    <script>
        window.addEventListener('scroll', function() {
            const bars = document.querySelectorAll('.bar');
            bars.forEach(bar => {
                const rect = bar.getBoundingClientRect();
                if (rect.top < window.innerHeight * 0.9) {
                    bar.classList.add('animate');
                }
            });
        });
    </script>

</body>
</html>
