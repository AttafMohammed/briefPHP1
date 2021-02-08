<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testbrief";
$titre = $_POST['titre'];
$auteur = $_POST['auteur'];
$imageUpload = $_POST['imageUpload'];
$filename = $_FILES["imageUpload"]["name"]; 
$tempname = $_FILES["imageUpload"]["tmp_name"];     
$folder = "image/".$filename; 
$prix = $_POST['prix'];
$quantite = $_POST['quantite'];
$date_achat = $_POST['date_achat'];
$date_de_publication = $_POST['date_de_publication'];

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO books (titre, auteur, imageUpload, prix, quantite, date_achat, date_de_publication)
VALUES ('$titre', '$auteur', '$imageUpload','$prix', '$quantite' , '$date_achat','$date_de_publication')";
// use exec() because no results are returned
$conn->exec($sql);
if (move_uploaded_file($tempname, $folder))  { 
  $msg = "Image uploaded successfully"; 
}else{ 
  $msg = "Failed to upload image"; 
} 
echo "New record created successfully";
header("location:read.php");

?>