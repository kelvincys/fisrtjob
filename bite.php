<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="kcys, sam lai">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/menu.css">
    <script src="bootstrap/js/jquery-3.3.1.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/entree.js"></script>
  </head>

  <body>
    <div class="container-fluid">
      <div class="row">
        <?php
        echo"hi";
                function findValue($foodid){
                    global $foodid, $canme, $ename, $price, $image;
                    include_once("dbtools.inc.php");
                    $link = create_connection() or die();
                    $sql = "SELECT * FROM food WHERE subcateid_id = 1";
                    if ($result = $mysqli->query($sql)) {
                              echo"hi";
                      while ($row = $result->fetch_assoc()) {

                          $foodid = $row['foodid'];
                          $price = $row['price'];
                          $canme = $row['cname'];
                          $ename = $row['ename'];
                          $image = $row['image'];
                          echo "<div class='col-lg-4 id='item".$foodid."'";
                          echo $cname."/".$ename."/".$price;
                          echo "<img src='".$image.">";

                      }
                    }
                }
            ?>  
      </div>
    </div>
      
  </body>


</html>
