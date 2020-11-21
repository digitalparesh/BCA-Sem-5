<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
    integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Time Space | Admin Panel</title>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
      <a href="/index.php" class="navbar-brand">Time Space</a>
    </div>
  </nav>

  <!-- HEADER -->
  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            <i class="fas fa-user"></i> Time Space Admin</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- ACTIONS -->
  <section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">

      </div>
    </div>
  </section>

  <!-- LOGIN -->
  <section id="login">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card">
            <div class="card-header">
              <h4>Account Login</h4>
            </div>
            <div class="card-body">
              <form action="#" method="POST">
              <div class="form-group">
                  <label for="uname">Name</label>
                  <input id="uname" type="text" class="form-control" name="name" required>
                </div>
              <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input id="password" type="password" class="form-control" name="password" required>
                  <!-- <p class="validate text-danger">Passwoed does not match</p> -->
                </div>
                <div class="form-group">
                  <label for="password">Bio</label>
                  <textarea class="form-control" name="bio" required>
                  </textarea>
                </div>
                <input id="submit" type="submit" name="registration" value="Ok" class="btn btn-primary btn-block">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer id="main-footer" class="bg-dark text-white mt-3 p-2">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="lead text-center mt-3">
            Copyright &copy;
            <span id="year"></span>
            Time Space
          </p>
        </div>
      </div>
    </div>
  </footer>

  <script src="/dashboard/js/main.js"></script>

  <script src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
    integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

    <!-- <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
<script>
      CKEDITOR.replace('bio');
</script> -->

  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());
  </script>
</body>

</html>
<?php
  if(isset($_SESSION['data']))
  {
    header("location:/dashboard/index.php");
  }
?>

<?php

include 'includes/connection.php';
if(isset($_POST['registration']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $bio = $_POST['bio'];
  
  $sql = "INSERT INTO admin (name,email,bio,password) VALUES ('$name', '$email', '$bio','$password')";
  
  if ($conn->query($sql)) {
    echo "New record created successfully";
    header("location:/dashboard/login.php/?message=Submit+SucessFully");
  }
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>
