<?php
require_once("inc/init.php");
require_once("inc/header.php");
?>
<?php 
// if($_POST){

if (isset($_POST) && !empty($_POST)) {

 if(empty($erreur)){
   $r=$pdo->query("INSERT INTO client(first_name, last_name, address, postal_code, city, telephone, type, siret, date_of_birth, place_of_birth, sexe) VALUES ('$_POST[first_name]','$_POST[last_name]','$_POST[address]','$_POST[postal_code]','$_POST[city]','$_POST[telephone]','$_POST[type]','$POST_[siret]','$_POST[date_of_birth]','$_POST[place_of_birth]','$_POST[sexe]'");
    // $content.=$erreur;
   //  echo "<pre>";
   // print_r($pdo);
   // echo "</pre>";


//var_dump($pdo);
}
}?>
<div class="container">
    <h1>Ajout d'un client</h1>
    <!-- Formulaire d'ajout de client -->
    <form method="post">
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="first_name">Prénom</label>
                <input type="text" name="first_name" class="form-control">
            </dinv>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="last_name">Nom</label>
                <input type="text" class="form-control" name="last_name">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="address">Adresse</label>
                <input type="text" class="form-control" name="address">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="postal_code">Code Postal</label>
                <input type="text" class="form-control" name="postal_code">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="city">Ville</label>
                <input type="text" class="form-control" name="city">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="telephone">Téléphone</label>
                <input type="text" class="form-control" name="telephone">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="type">Type</label>
                <select name="type" class="form-control">
                    <option>0</option>
                    <option>1</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="siret">SIRET</label>
                <input type="text" class="form-control" name="siret">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="birth_date">Date de naissance</label>
                <input type="date" class="form-control" name="birth_date">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="birth_place">Lieu de naissance</label>
                <input type="text" class="form-control" name="birth_place">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="gender">Sexe</label>
                <select name="gender" class="form-control">
                    <option>m</option>
                    <option>f</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary w-100">Créer client</button>
    </form>
  <?php
    $new_client = $pdo->lastInsertId();
    echo $new_client;

    if ($new_client >=1) { 
        echo "je suis ici"?>
        <div class="alert alert-success" role="alert">
            Le client a bien été ajouté à la base de données.
        </div>
    <?php 
} ?>
</div>
</body>
<?php 

require_once("inc/footer.php");

?>