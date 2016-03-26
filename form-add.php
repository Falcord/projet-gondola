<?php
   $titre = $_POST['titre'];
?>

<p>Le titre de l'article est : <?php echo $titre; ?> !</p>

<?php
   $texte = $_POST['texte'];
?>

<p>Le texte pour l'article est : <?php echo $texte; ?> !</p>

<a href="index.php"> retour </a>
   <?php
  //connection au serveur
  $cnx = mysqli_connect("localhost", "root", "", "gondola") ;

  //création de la requête SQL:
   //$sql = "INSERT  INTO news (id, titre, texte) 
    //   VALUES ('', $titre, $texte) " ;
  //exécution de la requête SQL:
  
   $requete = mysqli_query($cnx, "INSERT INTO news (id , titre, texte) VALUES ('', '$titre', '$texte')") or die( mysql_error()) ;
  
  //affichage des résultats, pour savoir si linsertion a marchée:
  if($requete)
  {
    echo("L'insertion a été correctement effectuée") ;
  }
  else
  {
    echo("L'insertion à échouée") ;
  }
?>