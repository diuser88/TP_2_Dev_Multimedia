<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>420-219-SF</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/bootstrap-4.1.3-dist/css/bootstrap.css" rel="stylesheet" media="screen">
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
      <h1 align="center">Se connecter</h1>
      <form method="POST" action="ajouterPiece.php">
        <div class="form-group row justify-content-md-center">
        <div class="col-sm-4">
          <label for="artiste">Utilisateur</label>
          <input type="text" class="form-control" id="artiste" name="artiste" required>
        </div>
          
        </div>
        <div class="form-group row justify-content-md-center">
          <div class="col-sm-4">
            <label for="titre">Mot de passe</label>
            <input type="text" class="form-control" id="titre" name="titre" required>
          </div>
          
        </div>
        <div class="form-group row justify-content-md-center">
          <div class="col-sm-2">
        <button type="submit" class="btn btn-large btn-primary">Ce connecter</button>
        </div>
        </div>
      </form>
      <br>
      <div class="form-group row justify-content-md-center">
          <div class="col-sm-3">
            <a href="listeLecture.php" class="btn btn-large btn-info" role="">Créer un nouvel utilisateur</a>
         </div>
      </div>
    </div> <!-- /container -->

 


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script>
	</script>
  </body>
</html>