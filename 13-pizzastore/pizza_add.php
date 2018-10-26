<?php
// Inclus la base de données
require_once(__DIR__.'/config/database.php');

// Le fichier header.php est inclus sur la page
require_once(__DIR__.'/partials/header.php'); ?>

    <main class="container">
        <h1>Ajouter une pizza</h1>

        <div class="row">
            <div class="offset-lg-2 col-lg-6">
                <form method="POST" id="add_pizza">
                    <div class="form-group">
                        <label for="pizza_name">Nom de la pizza</label>
                        <input name="pizza_name" type="text" class="form-control" id="pizza_name">
                    </div>
                    <div class="form-group">
                        <label for="pizza_price">Prix</label>
                        <input type="number" class="form-control" id="pizza_price">
                    </div>
                    <div class="form-group">
                        <label for="img_pizza">Image</label>
                        <input type="text" class="form-control" id="img_pizza">
                    </div>
                    <div class="form-group">
                        <label class="pizza_describe">Description</label>
                        <textarea class="form-control" form="add_pizza" rows="4"></textarea>
                        <!-- <label for="pizza_describe">Description</label> -->
                        <!-- <input type="text" class="form-control" id="pizza_describe"> -->
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="pizza_category">
                            <option value="1">Base sauce tomate</option>
                            <option value="2">Base crème fraîche</option>
                            <option value="3">Base sauce BBQ</option>
                        </select>
                    </div>
                    <div class="btn-submit">
                        <button type="submit" class="btn btn-danger">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </main>



<?php
// Le fichier footer.php est inclus sur la page
require_once(__DIR__.'/partials/footer.php'); ?>