<?php
$db = new PDO("mysql:host=localhost;dbname=testbrief;charset=UTF8", "root", "");
$sql = "SELECT * FROM books";
$stmt = $db->query($sql);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
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
        body {
            padding: 0px;
            margin: 0px;
        }

        table,
        tr,
        th,
        td {
            border: 1px solid lightgrey;
            border-collapse: collapse;

        }

        th {
            height: 30px;
        }

        td {
            height: 30px;
            text-align: center;

        }

        table {
            width: 90%;

        }

        thead {
            background-color: lightgrey;
        }

        #tableDiv {
            width: 100%;

            height: 600px;

        }

        #hautDePage {
            margin: auto;
            width: 80%;
            display: flex;
            padding: 20px;


        }

        .buttonAdd {
            display: flex;
            vertical-align: middle;
            width: 50%;
            width: 40%;
            align-items: center;
            justify-content: flex-end;
        }

        #heading {
            display: flex;
            width: 50%;
        }

        #buttonAdd {
            width: 100px;
            height: 30px;
            background-color: blueviolet;
            color: white;
            border: none;
        }

        #delete {
            background-color: yellow;
            width: 50px;
            height: 30px;
            border: none;

        }

        #update {
            background-color: red;
            width: 50px;
            height: 30px;
            border: none;
        }
        #footer{
            display: flex;
             
            height: 50px;
            width: 100%;
            line-height: 50px;
            color:rgb(130, 130, 130) ;
            /* height: calc(100vh - 20px); */
            position: absolute;
            bottom: 0;
           
            font-family:  Helvetica, sans-serif;
            font-size: 12px;
        }
        #footer p{
            text-align: center;

        }
    </style>
    <script language="JavaScript" type="text/javascript">
        function checkDelete() {
            return confirm('Are you sure?');
        }
    </script>
</head>

<body>
<?php include 'header.php';?>
    <div id="hautDePage">
        <div id="heading">
            <p>LIST OF BOOKS</p>
        </div>
        <div class="buttonAdd">
            <form method="get" action="index.php">
                <button id="buttonAdd" type="submit">Add</button>
            </form>

        </div>

    </div>
    <div id="tableDiv">


        <table style="margin: auto;">


            <thead>
                <tr>
                    <th style="width: 20%;">Titre</th>
                    <th style="width: 15%;">Auteur</th>
                    <th style="width: 15%;">Image</th>
                    <th style="width: 10%;">Prix</th>
                    <th style="width: 10%;">Quantite</th>
                    <th>date dachat </th>
                    <th> date de publication</th>
                    <th style="width: 15%;"> Actions</th>
                </tr>

            </thead>
            <tbody>
                <?php foreach ($rows as $row) : ?>
                    <tr>
                        <td><?php echo $row["titre"]; ?></td>
                        <td><?php echo $row["auteur"]; ?></td>
                        <td><?php echo $row['imageUpload']; ?></td>
                        <td><?php echo $row["prix"]; ?></td>
                        <td><?php echo $row["quantite"]; ?></td>
                        <td><?php echo $row["date_achat"]; ?></td>
                        <td><?php echo $row["date_de_publication"]; ?></td>
                        <td align="center">
                            <!-- Remarquer le paramètre idd généré coté serveur -->


                            <a href="supprimer.php?idd=<?php echo $row['id']; ?>" ><input id="delete" type="submit" value="delete"></a>
                            <a href="modifier.php?idd=<?php echo $row["id"];  ?>"  ><input id="update" type="submit" value="update"></a>

                          
                        </td>
                    </tr>
                <?php endforeach; ?>


            </tbody>


        </table>
    </div>
    <?php include 'footer.php';?>


</body>

</html>