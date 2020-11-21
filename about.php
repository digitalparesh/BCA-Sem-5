<!DOCTYPE html>
<html lang="en">
<?php
  $active = 'about';
  $title = "About | Time Space";
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
          <h1>About Us</h1>
          <p>Time Space is website design and web development service provider company.</p>
        </div>
      </div>
    </div>
  </header>

  <!-- ABOUT SECTION -->
  <section id="about" class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>What We Do</h1>
          <p>Time Space is best Website Design Company in Junagadh.We are working on Website Design, Web Development,
            SEO/SMO, Digital Marketing, Mobile Applications, Game Development, Software Development. MementoTech is
            Junagadh based It company.</p>
          <p>
            Here at Time Space, we put technology in your hand so you can not only do your business better but also make
            your presence felt on the internet. This will help you grow your business's reach in the vastness of world
            wide web.
          </p>
        </div>
        <div class="col-md-6">
          <img src="img/logo1.png" alt="" class="img-fluid rounded-circle d-none d-md-block about-img">
        </div>
      </div>
    </div>
  </section>

  <section class="mb-5">
    <div class="container">
      <h2 class="text-center my-top-5">TECHNICAL SKILLS</h2>
      <p class="bottom-line"></p>
      <p class="h5">React JS</p>
      <div class="progress mb-3 py-3">
        <div class="progress-bar bg-success align-self-center py-3" style="width: 90%;"><strong>90%</strong></div>
      </div>
      <p class="h5">JavaScript</p>
      <div class="progress mb-3 py-3">
        <div class="progress-bar bg-success align-self-center py-3" style="width: 95%;"><strong>95%</strong></div>
      </div>
      <p class="h5">Node JS</p>
      <div class="progress mb-3 py-3">
        <div class="progress-bar bg-success align-self-center py-3" style="width: 85%;"><strong>85%</strong></div>
      </div>
      <p class="h5">Express JS</p>
      <div class="progress mb-3 py-3">
        <div class="progress-bar bg-success align-self-center py-3" style="width: 80%;"><strong>80%</strong></div>
      </div>
      <p class="h5">MongoDB</p>
      <div class="progress mb-3 py-3">
        <div class="progress-bar bg-success align-self-center py-3" style="width: 90%;"><strong>90%</strong></div>
      </div>
    </div>
  </section>


  <!-- TESTIMONIALS -->
  <section id="testimonials" class="p-4 bg-dark text-white">
    <div class="container-fluid">
      <h2 class="text-center">testimonials</h2>
      <div class="row text-center">
        <div class="col">
          <div class="slider">
            <div>
              <blockquote class="blockquote">
                <p class="mb-0">
                  Hey, thank you for dropping me an email. I thought it's general marketing email like other people do.
                  But your totally different and proved me wrong.
                </p>
                <footer class="blockquote-footer">John Doe From
                  <cite title="Company 1">India</cite>
                </footer>
              </blockquote>
            </div>
            <div>
              <blockquote class="blockquote">
                <p class="mb-0">
                  Time Space team is truly experts. I never came across such great team of developers. I work with him
                  on few products in ReactJS.
                </p>
                <footer class="blockquote-footer">Sam Smith From
                  <cite title="Company 2">USA</cite>
                </footer>
              </blockquote>
            </div>
            <div>
              <blockquote class="blockquote">
                <p class="mb-0">
                  Time Space is absolutely great team to work with. They made my life easier by doing extra ordinary
                  work. Always delivers on time.
                </p>
                <footer class="blockquote-footer">Meghan Williams From
                  <cite title="Company 3">UK</cite>
                </footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
  include 'includes/footer.php';
?>
</body>

</html>
