<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Réalisations</title>
    
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
        }

        h1 {
            color: #333;
            text-align: center;
            font-size: 2.5em;
            margin-top: 0;
            animation: fadeIn 0.5s;
        }

        section {
            padding: 20px;
            margin: 20px auto;
            max-width: 800px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            animation: slideIn 0.5s forwards;
        }

        .realisation {
            margin-bottom: 20px;
        }

        .realisation h2 {
            color: #00796b;
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .realisation p {
            font-size: 1em;
            color: #555;
            margin: 0;
        }

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
    </style>
</head>
<body>
    <!-- Menu navigation -->
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

    <!-- Titre principal -->
    <h1>Mes Réalisations</h1>

    <!-- Section des réalisations -->
    <section>
        <div class="realisation">
            <h2>Projet 1 : Site Web Portfolio</h2>
            <p>Création d'un site web pour présenter mon portfolio. Utilisation des technologies HTML, CSS, JavaScript et PHP.</p>
        </div>
        <div class="realisation">
            <h2>Projet 2 : Application de Gestion</h2>
            <p>Développement d'une application pour la gestion des stocks en utilisant Symfony et MySQL.</p>
        </div>
        <div class="realisation">
            <h2>Projet 3 : Automatisation avec Python</h2>
            <p>Création de scripts Python pour automatiser des tâches répétitives au sein d'une entreprise.</p>
        </div>
    </section>
</body>
</html>
