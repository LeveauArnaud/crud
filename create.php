<?php
require 'db.php';
$message = '';
if (isset ($_POST['nom'])  && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['equipe']) && isset($_POST['participants'])  && isset($_POST['paye']) ) {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $email = $_POST['email'];
  $equipe = $_POST['equipe'];
  $participants = $_POST['participants'];
  $souper = $_POST['souper'];
  $commentaires = $_POST['commentaires'];
  $paye = $_POST['paye'];
  $sql = 'INSERT INTO inscriptions (nom, prenom, email, equipe, participants, souper, commentaires, paye) VALUES(:nom, :prenom, :email, :equipe, :participants, :souper, :commentaires, :paye)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':nom' => $nom, ':prenom' => $prenom, ':email' => $email, ':equipe' => $equipe, ':participants' => $participants, ':souper' => $souper, ':commentaires' => $commentaires, ':paye' => $paye, ':id' => $id])) {
    $message = 'data inserted successfully';
  }



}


 ?>
<!doctype html>
<html lang="fr">
  <head>
    <title>Crea Participant</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body class="bg-warning">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create.php">Participants</a>
      </li>
      
      
    </ul>
  </div>
</nav>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Ajouter un participants</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
         <div class="form-group">
          <label for="nom">Nom</label>
          <input value="<?= $person->nom; ?>" type="text" name="nom" id="nom" class="form-control">
        </div>
         <div class="form-group">
          <label for="prenom">Prenom</label>
          <input value="<?= $person->prenom; ?>" type="text" name="prenom" id="prenom" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" value="<?= $person->email; ?>" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="equipe">Equipe</label>
          <input value="<?= $person->equipe; ?>" type="text" name="equipe" id="equipe" class="form-control">
        </div>
       <div class="form-group">
          <label for="participants">Participants</label>
          <input value="<?= $person->participants; ?>" type="text" name="participants" id="participants" class="form-control">
        </div>
        <div class="form-group">
          <label for="souper">Souper</label>
          <input value="<?= $person->souper; ?>" type="text" name="souper" id="souper" class="form-control">
        </div>
        <div class="form-group">
          <label for="commentaires">Commentaire</label>
          <input value="<?= $person->commenatires; ?>" type="text" name="commenatires" id="commenatires" class="form-control">
        </div>
         <div class="form-group">
          <label for="name">Paye</label>
          <input value="<?= $person->paye; ?>" type="text" name="paye" id="paye" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Ajouter</button>
        </div>
      </form>
    </div>
  </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>

