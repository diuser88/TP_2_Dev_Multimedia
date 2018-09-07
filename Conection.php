
<?php
$server = "localhost";
$username = "root";
$password = "";
$databaseName = "dbdevmultimedia";
$tableName = "users";



$link = new mysqli($server, $username, $password);
if ($link->connect_errno) {
  echo "check your server conection !!!";
} 
else {

  if(!mysqli_select_db($link, $databaseName)){
    $query = "CREATE DATABASE $databaseName";
    $link->query($query);
    echo "Database was created successfuly <br>";
  }
  $link = new mysqli($server, $username, $password, $databaseName);
  
  $res = $link->query ("DESCRIBE $tableName");
  if(!$res){
    echo "Table $tableName dosn't existe " . "<br>";
    $query = "CREATE TABLE $tableName(
      Utilisateur VARCHAR(255) NOT NULL UNIQUE,
      MotDePasse VARCHAR(30) NOT NULL,
      ID INT UNSIGNED AUTO_INCREMENT,
      PRIMARY KEY (ID)
    )";
    if(!$link->query($query)){
      echo " Last error " . $link->error;
    }else{
      echo "The table $tableName was created successfuly !!!<br>";
    }
  }

  $utilisateur = $_POST["Utilisateur"];
  $Motdepasse = $_POST["Motdepasse"];

  $query = "INSERT INTO $tableName (Utilisateur, MotDePasse)
            VALUES ('$utilisateur', '$Motdepasse');";

  if($link->multi_query($query) === TRUE){
    header("Location: Utilisateur/LogIn.php?succes=1");
  }
  else
  {
    #ECHO "Error : " . $link->error;
    header("Location: Utilisateur/Creer.php?succes=0");
  }
  

}

?>
