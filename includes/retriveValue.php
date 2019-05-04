<?php
    session_start();
?>
<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
       <div class="container">
                <?php
              include '../connection/connection.php';
              $loggeduser = $_SESSION['loggedin'];
              $sql = "SELECT * FROM addtask WHERE UserName = '$loggeduser'";
              $result = $conn->query($sql);
              if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                

          ?>

            <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"> Date:<?php echo $row['DueDate']; ?></h5>
              <h6 class="card-subtitle mb-2 text-muted">Time: <?php echo $row['DueTime']; ?></h6>
              <p class="card-text"> Task Name:<?php echo $row['TaskName']; ?></p>
              <h5 class="card-title"> Type: <?php 
                                   if($row['TaskList'] == 1){
                                    echo "personal";
                                  }
                                     if($row['TaskList'] == 2){
                                      echo "Shoping";
                                    }

                                    if($row['TaskList'] == 3){
                                        echo "Wishlist";
                                    }

                                     if($row['TaskList'] == 4){
                                        echo "Work";
                                    }
              ?> </h5>

            </div>

          </div>
          <?php 
              }
          }
          ?>
       </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>