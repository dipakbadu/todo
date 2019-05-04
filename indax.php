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
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/style.css">

    <title></title>
  </head>
  <body class="mt-2" style="background-color: cyan;">
  	<div class="container">
  		<?php
  			include 'header.php';
  		?>
		<div class="container-fluid">
	  		<p class="mt-4"><?php echo "Today: ".date("D j M"); ?> </p>
		</div>
		<div class="container-fluid">
			<a href="Addtask/addtask.php"><i class='fas fa-plus' style='font-size:25px; color:red;'></i></a>
	  		<a href="Addtask/addtask.php" style='font-size:25px; color:black;'> add task</a>
		</div>
    <div class="container">
        <div class="row">
                  <?php
              include 'connection/connection.php';
              $loggeduser = $_SESSION['loggedin'];
              $sql = "SELECT * FROM addtask WHERE UserName = '$loggeduser'";
              $result = $conn->query($sql);
              if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                

          ?>
          <div class="col-12 col-sm-5 col-md-3 mt-4 mr-4">
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
                                      echo "Shopping";
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
        </div> 
          <?php 
              }
          }
          ?>
        </div>
      </div>
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>