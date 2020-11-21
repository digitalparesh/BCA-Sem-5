<?php

include 'includes/connection.php';
if(isset($_POST['submit']))
{
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = strip_tags($_POST['message']);
  
  $sql = "INSERT INTO contact (fname,lname,email,phone,message) VALUES ('$fname', '$lname', '$email','$phone','$message')";
  
  if ($conn->query($sql)) {
    echo "New record created successfully";
    header("Location:/contact.php/?message=Submit+SucessFully");
  }
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<?php
  $title = "Contact Us";
  $active = 'contact';
  include 'includes/head.php';
?>
<body>
<?php
  include 'includes/nav-bar.php';
?>

  <!-- PAGE HEADER -->
  <header id="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto text-center">
          <h1>Contact Us</h1>
          <p>we are waiting to see your feedback :)</p>
        </div>
      </div>
    </div>
  </header>

  <!-- CONTACT SECTION -->
  <section id="contact" class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card p-4">
            <div class="card-body">
              <h4>Get In Touch</h4>
              <p>If you want to visit our company then always welcome to we happy to meet you :)</p>
              <h4>Address</h4>
              <p>Junagadh, Gujarat, India</p>
              <h4>Email</h4>
              <p>pnandaniya01@gmail.com</p>
              <h4>Phone</h4>
              <p>+916354315536</p>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card p-4">
            <div class="card-body">
              <h3 class="text-center">Please fill out this form to contact us</h3>
              <hr>
              <form method="POST" action="contact.php">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="First Name" name="fname" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Last Name" name="lname" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Email" name="email" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Phone Number" name="phone" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Message" name="message" required></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="submit" value="Submit" name="submit" class="btn btn-outline-danger btn-block">
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- STAFF -->
  <section id="staff" class="py-5 text-center bg-dark text-white">
    <div class="container">
      <h1>Our Staff</h1>
      <hr>
      <div class="row">
        <div class="col-md-4 mt-5">
          <img src="img/sagar.jpeg" alt="" class="back img-fluid rounded-circle mb-2">
          <h4 class="sagar">Sagar Ahir</h4>
          <small class="sagarText">Back End Developer / Marketing Manager</small>
        </div>
        <div class="col-md-4 mt-5 mb-5">
          <img src="img/ceo.jpg" alt="" class="ceo img-fluid rounded-circle mb-2">
          <h4 class="paresh">Paresh Nandaniya</h4>
          <small class="pareshText">CEO / Full Stack Developer</small>
        </div>
        <div class="col-md-4 mt-5">
          <img src="img/deep.jpeg" alt="" class="img-fluid rounded-circle mb-2">
          <h4>Deep Ghetiya</h4>
          <small>Front-End Developer / Video Editor</small>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
<?php
  include 'includes/footer.php';
  if(isset($_GET['message']))
  {
?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
    Swal.fire(
      'Submit Successfully',
      'We will get back to you soon',
      'success'
    )
    </script>
<?php
  }
?>
</body>

</html>