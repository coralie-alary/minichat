
<?php
  try
  {
  // on se connecte à mysql    
  $bdd = new PDO('mysql:host=localhost; dbname=test','root', '');  //(nom de l'hote,nom de la bdd, login, mdp)
  }
  catch (Exception $e)
  {
      die('Erreur :'.$e -> getMessage()); //en cas d'erreur on affiche un message et on arrete tout
  } 
 // insertion du message à l'aide d'une requête préparée 
 $req = $bdd -> prepare ('INSERT INTO minichat (pseudo, message) VALUES (?, ?)');
 $req -> execute (array ($_POST ['pseudo'], $_POST ['message']));

 // redirection du visiteur vers la page du minichat
 header('Location:minichat.php');
?>


