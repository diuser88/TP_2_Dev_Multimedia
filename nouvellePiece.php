<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>420-219-SF</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
      i { margin-right: 10px; }
	  .navbar-inner h1 { color: white;  }
	  body { margin-top: 30px; }
	  .span1, .span2, .span3, .span4, .span5, .span6, 
	  .span7, .span8, .span9, .span10,.span11,.span12 { background-color: #ddd; border-radius: 5px; }
      .masquer { display: none; }
    </style>
  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <span class="label label-info">420-219-SF</span><h1>Développement multimédia</h1>
        </div>
      </div>
    </div>
    <div class="container">
      <h1>Formulaire d'ajout d'une pièce musicale</h1>
      <form method="POST" action="ajouterPiece.php">
        <div class="form-group">
          <label for="artiste">Artiste ou Groupe</label>
          <input type="text" class="form-control" id="artiste" name="artiste" required>
        </div>
        <div class="form-group">
          <label for="titre">Titre de la pièce</label>
          <input type="text" class="form-control" id="titre" name="titre" required>
        </div>
        <div class="form-group">
          <label for="dureeSec">Durée (en secondes)</label>
          <input type="number" min="0" max="3000" class="form-control" id="dureeSec" name="dureeSec" required>
        </div>
        <button type="submit" class="btn btn-large btn-primary">Ajouter</button>
      </form>
      <br>
      <a href="listeLecture.php" class="btn btn-large btn-danger">Annuler</a>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script>
	</script>
  </body>
</html>