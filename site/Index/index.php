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

        /* Style pour le titre principal */
        h1 {
            color: #333;
            text-align: center;
            font-size: 2.5em;
            margin-top: 0;
            animation: fadeIn 0.5s;
        }

        /* Style pour les sous-titres */
        h2 {
            color: #333;
            text-align: center;
        }

        /* Style pour chaque section (sans fond, sans bordure) */
        section {
            padding: 10px;        /* Ajoute un peu de padding autour du texte */
            margin-bottom: 5px;    /* Petit espace entre les sections */
            animation: slideIn 0.5s forwards;
            animation-delay: 0.5s;
            background-color: transparent; /* Pas de fond */
            border: none; /* Pas de bordure */
        }

        /* Style pour les paragraphes (petit espace entre les paragraphes) */
        p {
            margin: 0 0 1px 0;      /* Petite marge en bas de chaque paragraphe */
            padding: 0;             /* Pas de padding */
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
                <a href="index.php">
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
                <a href="../Pages/contact.php">
                    <i class="fas fa-envelope"></i> Contact
                </a>
            </li>
        </ul>
    </div>

    <!-- Contenu généré par PHP -->
    <?php
    require_once("../yaml/yaml.php");
    $data = yaml_parse_file('../Pages/Acceuil.yaml');
    
    echo "<h1>".$data["titre"]."</h1>\n";
    foreach($data["prenom"] AS $prenom){
        echo "<section><p>".ucfirst($prenom["nom"])." : ".$prenom["pseudo"]."</p></section>\n";
    }
    foreach($data["famille"] AS $nom){
        echo "<section><p>".ucfirst($nom["nom"])." : ".$nom["famille"]."</p></section>\n";
    }
    foreach($data["accroche"] AS $descriptif){
        echo "<section><p>".ucfirst($descriptif["descriptif"])."</p></section>\n";
    }
    foreach($data["presentation"] AS $descriptif){
        echo "<section><p>".ucfirst($descriptif["descriptif"])."</p></section>\n";
    }
    ?>

</body>
</html>
