<?php
$currentPageTitle = 'Nos pizzas';
// Le fichier header.php est inclus sur la page
require_once(__DIR__.'/partials/header.php');

// Récupérer la liste des pizzas
$query = $db->query('SELECT * FROM pizza');
$pizzas = $query->fetchAll();
?>

    <main class="container">
        <h1>Liste des pizzas</h1>

    <div class="row">
    <?php 
    // On affiche les pizzas
    foreach($pizzas as $pizza) { ?>

        <div class="col-md-3">
            <div class="card mb-4">
                <figure class="card-img-top-container">
                    <div class="card-img-top card-img-top-zoom-effect">
                        <img src="<?= $pizza['image'];?>" alt="<?= $pizza['name'];?>">
                        <figcaption class="card-price"><?= formatPrice($pizza['price']);?></figcaption>
                    </div>    
                </figure>
                <div class="card-body">
                    <h5 class="card-title"><?= $pizza['name'];?></h5>
                    <!-- Quand on clique sur le lien, on doit se rendre sur pizza_single.php
                    L'URL doit ressembler à pizza_single.php?id=IDDELAPIZZA
                     -->
                    <a href="pizza_single.php?id=<?=$pizza['id'];?>" class="btn btn-danger">Commandez</a>
                </div>
            </div>
        </div>

    <?php } ?>
        </div>
    </main>


         




<?php
// Le fichier footer.php est inclus sur la page
require_once(__DIR__.'/partials/footer.php'); ?>
