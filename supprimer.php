<?php
// Récupération du paramètre de la requête



if (isset($_POST['submit'])) {
  someFunction();
}
function someFunction() {
  $id = $_GET["idd"];
// connection au SGBD
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testbrief";
// Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 
  // sql to delete a record
$sql = "DELETE FROM books WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
header("location:read.php");
}







?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
      #confirmationDelete{
        width: 400px;
        height: 250px;
        background-color: lightgrey;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;

      }
      #oui{
        background-color: #8A2BE2;
        width: 100px;
        height: 30px;
        border: none;
        margin: 10px;
      }
      #non{
        background-color: red;
        width: 100px;
        height: 30px;
        border: none;
        margin: 10px;

      }
      .content{
        background-color: white;
        width: 100%;
        height: 600px;
        display: flex;
       align-items: center;
        justify-content: center;
      }
      #footer{
             
             height: 50px;
             width: 100%;
             line-height: 50px;
             color:rgb(130, 130, 130) ;
             /* height: calc(100vh - 20px); */
             position: absolute;
             bottom: 0;
             display: block;
             font-family:  Helvetica, sans-serif;
             font-size: 12px;
         }
         #footer p{
             text-align: center;
 
         }
    </style>
</head>
<body>
<?php include 'header.php';?>
  <div class="content">
  <div id="confirmationDelete">
    <div>
    <p>Are you sure you want to delete the book</p>
    </div>
    <div style="display: flex;">
    <form action="" method="POST">
      <input id="oui" type="submit" name="submit" value="OUI">
    </form>
    <form action="read.php" method="POST">
      <input id="non" type="submit" name="submit" value="NON">
    </form>
    


    
    </div>
    </div>
    
    </div>
    
    <div id="footer">
        <p>Library Copyrights 2020/2021</p>
    </div>
</body>
</html>
