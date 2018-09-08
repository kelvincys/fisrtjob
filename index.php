<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="kcys, sam lai">

    <title>TESTING</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/menu.css">
    <script src="bootstrap/js/jquery-3.3.1.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/loadcate.js"></script>
    <script src="js/entree.js"></script>

  </head>

  <body>
        <div class="container-fluid halfdown">
          <div class="row">
            <div class="col-lg-4" style="text-align: center">
              <a onclick="loadentree()"><button class="serbutton">ENTREE</button></a>
            </div>
            <div class="col-lg-4" style="text-align: center">
              <a onclick="loadbirthday()"><button class="serbutton">Birthday Party</button></a>
            </div>
            <div class="col-lg-4" style="text-align: center">
              <a onclick="loadwedding()"><button class="serbutton">Wedding Party</button></a>
            </div>
        </div>
    
    <div id="content">
    
    </div>

  </body>

</html>
