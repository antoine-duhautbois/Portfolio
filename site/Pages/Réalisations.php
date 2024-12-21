<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Réalisations</title>
    
    <!-- Lien vers Google Fonts et FontAwesome -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* Styles généraux */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(80deg, #e0f7fa, #80deea);
            color: #333;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        .description {
            text-align: center;
            margin: 10px auto 30px;
            color: #555;
        }

        /* Menu */
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
        
        /* Grille des réalisations */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .card {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.15);
        }
        .card h2 {
            color: #00796b;
            margin-bottom: 10px;
        }
        .card p {
            color: #555;
            font-size: 0.9em;
        }

        /* Style du bouton */
        .btn {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #00796b;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.2s;
        }
        .btn:hover {
            background-color: #004d40;
            transform: scale(1.05);
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

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        @keyframes underline {
            0% { transform: scaleX(0); }
            100% { transform: scaleX(1); }
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
                <a href="Réalisations.php">
                    <i class="fas fa-trophy"></i> Réalisations
                </a>
            </li>
            <li>
                <a href="Formations.php">
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

    <!-- Titre principal -->
    <h1>Mes Réalisations</h1>
    <p class="description">Voici mes réalisations que j'ai pu faire durant le début de l'année scolaire.</p>

    <!-- Section des réalisations -->
    <div class="grid">
        <?php
        require_once(__DIR__ . '/../../../vendor/autoload.php');
        use Symfony\Component\Yaml\Yaml;

        $yamlFile = __DIR__ . '/Réalisations.yaml';

        try {
            $data = Yaml::parseFile($yamlFile);
            
            foreach ($data['realisations'] as $realisation) {
                echo '<div class="card">';
                echo '<h2>' . htmlspecialchars($realisation['titre']) . '</h2>';
                echo '<p>' . htmlspecialchars($realisation['description']) . '</p>';
                
                if (!empty($realisation['lien'])) {
                    echo '<a href="' . htmlspecialchars($realisation['lien']) . '" class="btn" target="_blank">Voir le projet</a>';
                }
                
                echo '</div>';
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
