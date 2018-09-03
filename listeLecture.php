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
      <h1>Liste des pièces musicales</h1>
      <a href="nouvellePiece.php" class="btn btn-large btn-primary">Nouvelle pièce</a>
      <br><br>

        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Titre</th>
              <th>Artiste/Groupe</th>
              <th>Durée (secondes)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a class="btn btn-xs btn-danger" href="supprimer.php">X</a> Thriller</td>
              <td>Michaël Jackson</td>
              <td>357 secondes</td>
            </tr>
          </tbody>
        </table>
        <h3>Durée totale: XmXs</h3>

        <h3>Aucune pièce de disponible.</h3>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script>
	</script>
  </body>
</html>