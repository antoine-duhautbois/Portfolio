<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>
    
    <!-- Lien vers Google Fonts et FontAwesome -->
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

        .menu ul li a i {
            margin-right: 8px;
            transition: transform 0.2s;
        }

        .menu ul li a:hover {
            background-color: #00796b;
            color: #fff;
            animation: bounce 1s forwards;
        }

        .menu ul li a:hover i {
            transform: scale(1.2);
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

        h1 {
            text-align: center;
            margin: 30px 0;
        }

        section {
            padding: 20px;
            margin: 20px auto;
            max-width: 1000px;
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }

        .github-logo {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 40px;
        }

        .github-logo img {
            width: 60px;
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
            <li><a href="#accueil"><i class="fas fa-home"></i> Accueil</a></li>
            <li><a href="#competences"><i class="fas fa-tools"></i> Compétences</a></li>
            <li><a href="#realisations"><i class="fas fa-trophy"></i> Réalisations</a></li>
            <li><a href="#formations"><i class="fas fa-graduation-cap"></i> Formations</a></li>
            <li><a href="#contact"><i class="fas fa-envelope"></i> Contact</a></li>
        </ul>
    </div>

    <!-- Section Accueil + appel du php -->
    <section id="accueil">
        <h1>Bienvenue sur mon Portfolio</h1>
        <?php include 'site/Pages/Acceuil.php'; ?>
    </section>

    <!-- Section Compétences + appel du php -->
    <section id="competences">
        <?php include 'site/Pages/Compétences.php'; ?>
    </section>

    <!-- Section Réalisations + appel du php -->
    <section id="realisations">
        <?php include 'site/Pages/Réalisations.php'; ?>
    </section>

    <!-- Section Formations + appel du php -->
    <section id="formations">
        <?php include 'site/Pages/Formations.php'; ?>
    </section>

    <!-- Section Contact + appel du php -->
    <section id="contact">
        <?php include 'site/Pages/contact.php'; ?>
    </section>

    <!-- Logo GitHub avec mon lien  -->
    <div class="github-logo">
        <a href="https://github.com/antoine-duhautbois" target="_blank">
            <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="GitHub Logo">
        </a>
    </div>

</body>
</html>
