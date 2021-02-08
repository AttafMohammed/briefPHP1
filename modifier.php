<?php
// Récupération du paramètre de la requête
$id = $_GET["idd"];

// Create connection
$db = new PDO("mysql:host=localhost;dbname=testbrief;charset=UTF8", "root", "");



$sql = "SELECT * FROM books WHERE id=?";

$stmt  = $db->prepare($sql);

$stmt->bindValue(1, $id, PDO::PARAM_INT);

$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_OBJ);

if (!$row) {
    header("location:index.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         #navBarre {
            height: 100px;
            background-color: #6001FF;
        }

        #list {
        
            float: right;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 16px;
            }

        
        #list ul {
            margin:0px;
            margin-top: 40px ;
        }

        #list ul li {
            margin: 0px;
            padding: 0px 32px;
            padding-bottom: 10px;
            display: inline;
            font-size: 15px;
            list-style-type: none;  
        }

        #list ul li a {
            color: #f2f5f7;
            text-decoration: none;
            transition: color 0.5s;
        }

        #list ul li a:hover {
            text-decoration: underline;
        }

        
        #title {
            padding: 30px 50px 0px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 22px;
            color: white;
            display: inline-block;

        }
        * {
            margin: 0%;
            padding: 0%;
        }

        body {
            background-color: #F2F2F2;
        }

        * {
            margin: 0;
            padding: 0;
        }

        #navBarre {
            height: 100px;
            background-color: #6001FF;
        }

        #list {
            /* margin: 0px 0px 50px; */
            /* padding: 10px 15px; */
            float: right;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 16px;
            /* line-height: 6%; */
        }

        #list ul {
            margin: 0px;
            margin-top: 40px;
        }

        #list ul li {
            margin: 0px;
            padding: 0px 32px;
            padding-bottom: 10px;
            display: inline;
            font-size: 15px;
            list-style-type: none;
            /* border-bottom: 6px solid white; */
        }

        #list ul li a {
            color: #f2f5f7;
            text-decoration: none;
            transition: color 0.5s;
        }

        #list ul li a:hover {
            text-decoration: underline;
        }

        /* .navbar-container ul li a {
	color: #ffffff;
	text-decoration: none;
	display: inline-block;	
	padding: 10px;
	transition: color 0.5s;
} */


        #title {
            padding: 30px 50px 0px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 22px;
            color: white;
            /* line-height: 100%; */
            display: inline-block;

        }

        .titleg p {

            font-weight: bold;

            margin-top: 100px;
            margin-left: 5%;
            color: #6001FF;
        }

        .form {
            padding-left: 500px;
            padding-top: 50px;
           
        }

        .form input {
            padding: 8px 50px;
            background-color: rgb(230, 230, 230);
            position: relative;
            overflow: hidden;
            outline: none;
            border: none;

        }

        .form button {
            padding: 8px 50px;
            background-color: #6001FF;
            color: white;
        }

        .form input[type="file"] {
            padding-left: 10px;
            height: 25px;
        }

        .btn {
            margin-left: 75px;
        }

        .form span {
            font-weight: bold;
        }

        #footer {

            height: 50px;
            width: 100%;
            line-height: 50px;
            color: rgb(130, 130, 130);
            margin-left: -230px;
            display: block;
            font-family: Helvetica, sans-serif;
            font-size: 12px;
        }

        #footer p {
            text-align: center;
        }
       
    </style>
</head>

<body>
    <header>
    <?php include 'header.php';?>
       
    </header>
    <div class="titleg">
        <p>new books :</p>
    </div>

    <form action="enregistrer.php" method="GET">


        <div class="form">
            <span>title</span><br>
            <input type="hidden" name="idd" value="<?php echo $row->id ?>" >
            <input type="text" name="titre" value="<?= $row->titre ?>"> <br> <br>
            <span>Author</span><br>
            <input type="text" name="auteur" value="<?= $row->auteur ?>"> <br> <br>
            <span>image </span>
            <div class="">
                <input type="file" name="imageUpload" value="<?= $row->imageUpload ?>" style="width:242px;"> <br> <br>
                <span>prix </span>
                <div class="">
                    <input type="text" name="prix" value="<?= $row->prix ?>" style="width:200px;">
                </div> <br>
                <span> quatité au stock</span> <br>
                <input type="text" name="quantite" value="<?= $row->quantite ?>"> <br> <br>
                <span>date d'achat</span> <br>
                <input type="date" id="start" name="date_achat" value="<?= $row->date_achat ?>" style="width:200px;" value="2021-04-04" min="2019-02-04" max="2025-2-4"> <br> <br>
                <div>
                    <span>Date du publication</span><br>
                    <input type="date" style="width:200px;" class="form-control" value="2021-02-04" min="2021-02-04" max="2025-2-4" id="date_de_publication" name="date_de_publication" required>
                </div> <br>
                <!--<span>Published AT</span>  <br> <br>
    <input type="text"> <br> -->
                <div class="btn" type="submit" name="submit"><button>Enregistrer</button></div>
            </div>
    </form><br><br><br>
    
    
  
 
  



</body>

</html>