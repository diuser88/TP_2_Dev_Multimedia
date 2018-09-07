<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>420-219-SF</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/bootstrap-4.1.3-dist/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"  rel="stylesheet" media="screen">
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
    	<div class="form-group row justify-content-md-center">
    		<h1>Créer un nouvel Utilisateur</h1>
    	</div>
    	<?php
        		if(isset($_GET["succes"]))
        		{
        			$succes = $_GET["succes"];
        			echo $succes . " first<br>";
        			if($succes == false)
        			{
        				echo $succes . " After check";
        				?>
        				<div class="form-group row justify-content-md-center">
        					<div class="navbar col-sm-4 bg-danger ">
        					<h3>Utilisateur avec le nom $succes deja existe</h3>	
        				</div>
        				</div>
        			<?php
        			}
        		}
        ?>
      
      <form method="POST" action="../Conection.php">
        <div class="form-group row justify-content-md-center">
        	<div class="col-sm-4">
        		 <label for="Utilisateur">Utilisateur</label>
          <input type="text" class="form-control" id="Utilisateur" name="Utilisateur" required>
        	</div>
         
        </div>
        <div class="form-group row justify-content-md-center">
        	<div class="col-sm-4">
        		<label for="Mot de passe">Mot de passe</label>
          <input type="text" class="form-control" id="Motdepasse" name="Motdepasse" required>
        	</div>
          
        </div>
        <div class="form-group row justify-content-md-center">
        	<div class="col-sm-3">
        		<button type="submit" class="btn btn-large btn-primary">Créer un nouvel Utilisateur</button>
        	</div>
        	
        </div>
         <div class="form-group row justify-content-md-center">
        	<div class="col-sm-2">
        		<a href="listeLecture.php" class="btn btn-large btn-danger">Annuler</a>
        	</div>
        	
        </div>
        
      </form>
      <br>
      
    </div> <!-- /container -->


</body>
</html>