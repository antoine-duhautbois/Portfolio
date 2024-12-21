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
        /* Style général du corps de la page */
        body {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            margin: 0;
            padding: 0;
            background: linear-gradient(80deg, #e0f7fa, #80deea); 
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
        }

        .menu ul li a:hover {
            background-color: #00796b;
            color: #fff;
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
        }

        /* Style pour le titre principal */
        h1 {
            color: #333;
            text-align: center;
            font-size: 2.5em;
            margin-top: 10px;
            animation: fadeIn 0.5s;
        }

        /* Style pour chaque section */
        section {
            padding: 10px;
            margin-bottom: 10px;
            animation: slideIn 0.5s forwards;
        }

        /* Style pour la photo */
        .photo {
            display: block;
            margin: 20px auto;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }

        /* Style pour le logo GitHub */
        .github-logo {
            text-align: center;
            margin: 50px 0;
        }

        .github-logo a {
            font-size: 60px;
            color: #333;
            transition: color 0.3s, transform 0.3s;
        }

        .github-logo a:hover {
            color: #00796b;
            transform: scale(1.1);
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
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

    <!-- Présentation -->
    <h1>Présentation</h1>
    <center>
        <h3>Bienvenue sur ma page de Portfolio. Vous êtes actuellement sur la page de présentation (Accueil)</h3>
    </center>

    <!-- Photo de profil -->
    <img src="/site/Extras/photo-profil.jpg" alt="Ma photo" class="photo">

    <!-- Contenu PHP généré par YAML -->
    <?php
    require_once("../vendor/autoload.php");
    use Symfony\Component\Yaml\Yaml;

    $yamlFile = '../Portfolio/site/Pages/Acceuil.yaml';
    
    try {
        $data = Yaml::parseFile($yamlFile);
        
        echo "<h1>" . htmlspecialchars($data["titre"]) . "</h1>\n";
        
        foreach ($data["prenom"] as $prenom) {
            echo "<section><p>" . ucfirst(htmlspecialchars($prenom["nom"])) . " : " . htmlspecialchars($prenom["pseudo"]) . "</p></section>\n";
        }
        
        foreach ($data["famille"] as $nom) {
            echo "<section><p>" . ucfirst(htmlspecialchars($nom["nom"])) . " : " . htmlspecialchars($nom["famille"]) . "</p></section>\n";
        }
        
        foreach ($data["accroche"] as $descriptif) {
            echo "<section><p>" . ucfirst(htmlspecialchars($descriptif["descriptif"])) . "</p></section>\n";
        }
    } catch (Exception $e) {
        echo 'Erreur lors du chargement du fichier YAML : ' . $e->getMessage();
    }
    ?>

    <!-- Logo GitHub (en bas de page) -->
    <div class="github-logo">
        <a href="https://github.com/antoine-duhautbois" target="_blank">
            <i class="fab fa-github"></i>
        </a>
    </div>

</body>
</html>
