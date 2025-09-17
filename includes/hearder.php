<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Auvernight</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap + FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a2e0e9c123.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .text-gradient {
            background: linear-gradient(90deg, #ff6ec4, #7873f5);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">Auvernight</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="agenda.php">Agenda</a></li>
                    <li class="nav-item"><a class="nav-link" href="carte.php">Carte</a></li>
                    <li class="nav-item"><a class="nav-link" href="bonsplans.php">Bons plans</a></li>
                    <?php if (!empty($_SESSION['user_id'])): ?>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Déconnexion</a></li>
                    <?php else: ?>
                        <li class="nav-item"><a class="nav-link" href="login.php">Connexion</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
