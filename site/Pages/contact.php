<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* Style général */
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
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .menu ul li {
            position: relative;
        }

        .menu ul li a {
            color: #00796b;
            text-decoration: none;
            font-weight: bold;
            padding: 12px 20px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s, transform 0.2s;
            display: flex;
            align-items: center;
        }

        .menu ul li a:hover {
            background-color: #00796b;
            color: #fff;
            transform: scale(1.1);
        }

        .menu ul li a i {
            margin-right: 8px;
        }

        /* Style sous-menu */
        .menu ul li ul {
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 10px 0;
            border-radius: 5px;
            display: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            z-index: 10;
        }

        .menu ul li:hover ul {
            display: block;
        }

        .menu ul li ul li {
            margin: 0;
        }

        .menu ul li ul li a {
            padding: 10px 20px;
            white-space: nowrap;
            background-color: #fff;
            color: #00796b;
        }

        .menu ul li ul li a:hover {
            background-color: #00796b;
            color: #fff;
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
                <!-- Sous-menu -->
                <ul>
                    <li><a href="#Bac+2">Bac+2</a></li>
                    <li><a href="#Bac+3">Bac+3</a></li>
                </ul>
            </li>
            <li>
                <a href="contact.php">
                    <i class="fas fa-envelope"></i> Contact
                </a>
            </li>
        </ul>
    </div>

</body>
</html>
