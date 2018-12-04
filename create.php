<?php
require 'db.php';
// ajout
if (isset($_POST['create'])) {
 $nom = filter_input(INPUT_POST, 'nom');
 $prenom = filter_input(INPUT_POST, 'prenom');
 $email = filter_input(INPUT_POST, 'email');
 $equipe = filter_input(INPUT_POST, 'equipe');
 $participants = filter_input(INPUT_POST, 'participants');
 $souper = filter_input(INPUT_POST, 'souper');
 $commentaires = filter_input(INPUT_POST, 'commentaires');
 $paye = filter_input(INPUT_POST, 'paye');


  $sql = "INSERT INTO inscriptions (nom, prenom, email, equipe, participants, souper, commentaires, paye)
  values ('$nom','$prenom','$email','$equipe','$participants','$souper','$commentaires','$paye')";
  if ($connection->query($sql)){
      	header ("Location: index.php");
  		exit();
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
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
      <form method="post" autocomplete="on">


								
									<div class="form-group">
										<label for="nom">Nom</label>
										<input type="text" name="nom" placeholder="Nom" class="form-control" required>
									</div>
									<div class="6u 12u(mobile)">
										<label for="prenom">Preom</label>
										<input type="text" name="prenom" placeholder="prenom" class="form-control" required>
									</div>
							
								
									<div class="form-group">
										<label for="email">Email</label>
										<input type="email" name="email" placeholder="Email" class="form-control" required>
									</div>
									<div class="form-group">
										<label for="equipe">Equipe</label>
										<input type="text" name="equipe" placeholder="nom de l'équipe" class="form-control">
									</div>
							
								
									<div class="form-group">
										<label for="souper">Souper</label>
										<input type="text" name="souper" placeholder="nombre de personnes participant au souper" class="form-control" required>
									</div>
									<div class="form-group">
									<label for="participant">Participants</label>
									<select name="participants" class="form-control" required>
  										<option value="1">1 membre</option>
  										<option value="2">2 membres</option>
 										<option value="3">3 membres</option>
  										<option value="4">4 membres</option>
  										<option value="5">5 membres</option>
  										<option value="6">6 membres</option>
									</select>
									</div>
		
								
									<div class="form-group">
										<label for="commentaire">Commentaire</label>
										<textarea name="commentaires" placeholder="Commentaires" class="form-control" ></textarea>
									</div>
									<div class="form-group">
										<label for="paye">Payé</label>
										<input type="text" name="paye" placeholder="" class="form-control" value="non">
									</div>								
											

        <div class="form-group ">
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

