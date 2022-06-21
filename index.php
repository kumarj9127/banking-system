<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="icon" href="img/logo.png">
    <title>Jeenu Banking System</title>
  </head>
  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid" >
      <!-- Introduction section -->
            <div class="row intro py-1" >
              
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank1.png" class="img-fluid pt-2" style="width:400px">
              </div>
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5" >
                  <h3 style="color:white;">Welcome To</h3>
                  <h1 style="color:white;">JEENU BANK</h1>
                </div>
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/219986.png" style="width:350px" class="img-thumbnail mt-2" style="border:2px solid black;">
                    <br>
                    <a href="transfermoney.php"><button class="mt-2 btn btn-success" style="">Veiw all Users</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transaction.jpg" style="width:350px" class="img-thumbnail mt-2" style="border:2px solid black;">
                    <br>
                    <a href="transfermoney.php"><button class="mt-2 btn btn-success">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transaction_history.jpg" style="width:350px" class="img-thumbnail mt-2" style="border:2px solid black;">
                    <br>
                    <a href="transactionhistory.php"><button class="mt-2 btn btn-success">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Jeenulakunta Kumar</b> <br> The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>