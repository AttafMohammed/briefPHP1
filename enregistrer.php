<?php

$id = $_GET["idd"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testbrief";
$titre = $_GET['titre'];
$auteur = $_GET['auteur'];
$imageUpload = $_GET['imageUpload'];
$prix = $_GET['prix'];
$quantite = $_GET['quantite'];
$date_achat = $_GET['date_achat'];
$date_de_publication = $_GET['date_de_publication'];


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    $sql = "UPDATE books SET titre='$titre', auteur='$auteur', imageUpload='$imageUpload', prix='$prix',quantite='$quantite', date_achat='$date_achat',date_de_publication='$date_de_publication' WHERE id=$id";

  
    // Prepare statement
    $stmt = $conn->prepare($sql);
  
    // execute the query
    $stmt->execute();
  
    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
  header("location:read.php");
  ?>





  






