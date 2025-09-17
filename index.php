<?php
// Connexion BDD
require_once "db.php";

// Récupérer les 3 prochains événements
$stmt = $pdo->query("SELECT * FROM events ORDER BY date ASC LIMIT 3");
$events = $stmt->fetchAll();
?>
<?php include "includes/header.php"; ?>

<div class="container mt-5">
    <!-- Hero section -->
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold text-gradient">Bienvenue sur Auvernight 🎉</h1>
        <p class="lead">Toutes les soirées étudiantes, bons plans et partenaires au même endroit !</p>
        <a href="agenda.php" class="btn btn-primary btn-lg rounded-pill">Voir l’agenda</a>
    </div>

    <!-- Section événements -->
    <h2 class="mb-4">🔥 Prochains événements</h2>
    <div class="row">
        <?php if (count($events) > 0): ?>
            <?php foreach ($events as $event): ?>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="assets/images/events/<?= htmlspecialchars($event['image']) ?>" 
                             class="card-img-top" alt="<?= htmlspecialchars($event['titre']) ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($event['titre']) ?></h5>
                            <p class="card-text">
                                <?= htmlspecialchars($event['description']) ?><br>
                                📍 <?= htmlspecialchars($event['lieu']) ?><br>
                                📅 <?= date("d/m/Y H:i", strtotime($event['date'])) ?><br>
                                💸 <?= $event['prix'] == 0 ? "Gratuit" : $event['prix']." €" ?>
                            </p>
                            <a href="agenda.php" class="btn btn-sm btn-outline-primary">Voir +</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Aucun événement à venir pour le moment.</p>
        <?php endif; ?>
    </div>
</div>

<?php include "includes/footer.php"; ?>
