
<?php


require 'db.php';
//récupération 
$id = intval($_GET['id'] ?? 0);
$reqRegister = $connection->prepare('SELECT * FROM inscriptions WHERE id = :id');
$reqRegister->execute([
    ':id' => $id
]);
 
//  PDO::FETCH_OBJ  dans
// $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
// comme ça tout les fetch et fetchAll() seront défini sur FETCH_OBJ
$person = $reqRegister->fetch(PDO::FETCH_OBJ);
 
//  php >= 7 vérification
$nom = $_POST['nom'] ?? null;
$prenom = $_POST['prenom'] ?? null;
$email = $_POST['email'] ?? null;
$equipe = $_POST['equipe'] ?? null;
$participants = $_POST['participants'] ?? null;
$souper = $_POST['souper'] ?? null;
$commentaires = $_POST['commentaires'] ?? null;
$paye = $_POST['paye'] ?? null;

// modification
 
if (isset($_POST['create'])) {
    $reqUpdate = $connection->prepare('UPDATE inscriptions SET
        nom = :nom,
        prenom = :prenom,
        email = :email,
        equipe = :equipe,
        participants = :participants,
        souper = :souper,
        commentaires = :commentaires,
        paye = :paye
        WHERE id = :id');
     $reqUpdate->execute([
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':email' => $email,
        ':equipe' => $equipe,
        ':participants' => $participants,
        ':souper' => $souper,
        ':commentaires' => $commentaires,
        ':paye' => $paye,
        ':id' => $id
    ]);

    header('Location: index.php');
    exit();
}
?>

<!doctype html>
<html lang="fr">
  <head>
    <title>Modif Participant</title>
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
          
    </ul>
  </div>
</nav>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Modification participant</h2>
    </div>
    <div class="card-body">
      <form method="post">
        <div class="form-group">
          <label for="name">Nom</label>
          <input value="<?= $person->nom; ?>" type="text" name="nom" id="nom" class="form-control">
        </div>
         <div class="form-group">
          <label for="name">Prenom</label>
          <input value="<?= $person->prenom; ?>" type="text" name="prenom" id="prenom" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" value="<?= $person->email; ?>" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">Equipe</label>
          <input value="<?= $person->equipe; ?>" type="text" name="equipe" id="equipe" class="form-control">
        </div>
       <div class="form-group">
          <label for="name">Participants</label>
          <input value="<?= $person->participants; ?>" type="text" name="participants" id="participants" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">Souper</label>
          <input value="<?= $person->souper; ?>" type="text" name="souper" id="souper" class="form-control">
        </div>
        <div class="form-group">
          <label for="commentaires">Commentaire</label>
          <input value="<?= $person->commentaires; ?>" type="text" name="commentaires" id="commentaires" class="form-control">
        </div>
         <div class="form-group">
          <label for="name">Paye</label>
          <input value="<?= $person->paye; ?>" type="text" name="paye" id="paye" class="form-control">
        </div>
        <div class="form-group">
          <input type="submit" class="special btn btn-info " value="envoyer" name="create" />
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
