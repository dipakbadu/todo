<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title></title>
  </head>
  <body style="background-color: cyan;" class="mt-5">
    <div class="container" class="mt-2">
      <?php
          include "../header.php";
      ?>
      <form action="../includes/inserttask.php" method="POST">
        <div class="form-group">
          <label for="exampleInputEmail1">what is to be done?</label>
          <input type="text" class="form-control" id="taskname" name="taskname" aria-describedby="emailHelp" placeholder="Enter task here">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">due date</label>
          <input type="date" class="form-control" id="duedate" name="duedate" placeholder="date not set">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">set time</label>
          <input type="time" class="form-control" id="duetime" name="duetime" placeholder="date not set">
        </div>
        <div>Task list</div>
        <div class="form-row align-items-center">
        <div class="col-auto my-1">
          <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Task List</label>
          <select class="custom-select mr-sm-2" id="tasklist" name="tasklist">
            <option selected>Default</option>
            <option value="1">Personal</option>
            <option value="2">Shopping</option>
            <option value="3">wishlist</option>
            <option value="3">Work</option>
          </select>
          </div>
        </div>
        <br/>

          <div>
            <button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>
          </div> 
      </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>