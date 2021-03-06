<?php
session_start();
if($_SESSION['user_id']!=null) echo "<script>location.href='dashboard.php'</script>";
?>
<!doctype html>
<html class="h-100">
  <head>
    <title>CoinBucc Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/global.css">
  </head>
  <body class="h-100">
    <div class="row align-items-center mw-100 mh-100 h-100 mx-0" style=>
      <div class="shadow card bg-mdark col-11 col-md-4 col-xl-3 mx-auto">
        <div class="card-body mx-5 mt-5 text-center">
          <img src="img/COINBUCC.png" class="img-fluid mb-5">
          <form action="member/login_check.php" method="POST">
            <input type="text" class="text-primary bg-mdark form-control f-input mb-3" placeholder="ID" aria-label="ID" aria-describedby="ID" name="user_id">
            <input type="password" class="text-primary bg-mdark form-control f-input mb-4" placeholder="Password" aria-label="Password" aria-describedby="Password" name="password">
            <input type="submit" class="shadow btn btn-outline-primary btn-block mb-3" value="Login">
            <a href="member/register.php" class="text-primary mb-5">Sign Up</a>
          </form>
        </div>
      </div>
    </div>
    <!-- JavaScript -->
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>