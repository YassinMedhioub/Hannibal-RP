<!-- All licence and rights are reserved!! this website is developed by Nemss nd u can't take any script of this website
     without permission...
     If u want somthing just contact him :
     IG: nemss__
     Discord: NEMSS#8451
 -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hannibal RP</title>
  <meta content="images/hannibal.png" name="description">
  <meta content="images/hannibal.png" name="keywords">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
  <link href="images/hannibal.png" rel="icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/styly.css">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <script src="https://apis.google.com/js/platform.js"></script>
  <script type="text/javascript" src="assets/js/jshere.js"></script>
  <script type="text/javascript" src="assets/js/free.js"></script>
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets-pre/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets-pre/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets-pre/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets-pre/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets-pre/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets-pre/vendor/aos/aos.css" rel="stylesheet">
  <link href="images/hannibal.png" rel="icon">
  <link href="images/hannibal.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="indexx.css">
  <link rel="stylesheet" href="card.css">
  <script src="indexx.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets-pre/css/style.css" rel="stylesheet">
  <?php
  session_start();

  if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    $mail = isset($_SESSION['name']) ? $_SESSION['name'] : 'no-email@example.com'; ?>
</head>

<body>
  <div id="preloader">
    <center><img src="images/off3d.gif" alt="3dlogo" id="pr" style="width: 50ch; height:50ch;"></center>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" name="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light">
          <a href="home.php">
            <b>H<span id="type-ugrpg" class="text-white"></span></b>
          </a>
        </h1>
      </div>

      <nav id="navbar" name="navbar" class="navbar">
        <ul>
          <li><a class="active " href="home.php"><i class="fas fa-home"></i>&nbsp; Home</a></li>
          <li><a href="rules.php"><i class="fad fa-tasks"></i></i></i></i></i>&nbsp;Rules</a></li>
          <li><a href="events.php"><i class="far fa-calendar-check"></i>&nbsp;Events</a></li>
          <li><a href="launcher.html"><span><i class="fab fa-linux"></i>&nbsp;Launcher</span></a></li>
          <li class="dropdown"><a href="#"><span><i class="fab fa-stack-overflow"></i>&nbsp;Whitelist</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="https://docs.google.com/forms/d/1XlloByUrOuTn-Eg9TEH_rl6fDOY39wYbdKUkE4ENPt8/edit?edit_requested=true">Whitelist App</a></li>
              <li><a href="https://docs.google.com/forms/d/10UaVpSQ8lDU5hHCobj0XNn7PbLOBHYk2K6sLpapd3Y4/edit">Gang App</a></li>
              <li><a href="https://docs.google.com/forms/d/1Rlt9VjHairCBC6gCTu57YERKxIESkuG-cn6i486wTuQ/edit">Police App</a></li>
              <li><a href="https://docs.google.com/forms/d/1wFS9ScWVfuoF8q98nt8f2-Wm_B__htcnLa41qJzVdhA/edit">Staff App</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>&nbsp;

                Hello , <?php echo $_SESSION['user_name']; ?></h1></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="accmg.php">My Account</a></li>
              <li><a href="account/logout.php">Logout</a></li>
            </ul>
          <?php
        }
          ?>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <main>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
      <div id="heroCarousel" class="container carousel carousel-fade">



        <!-- Slide 2 -->
        <div class="carousel-item active">
          <div class="carousel-container">
            <h1 id="ga3" data-text=" Hannibal RP"><span>Hannibal RP</span></h1>
          </div>
        </div>


      </div>
    </section><!-- End Hero -->




    </section>

    <section class="ekherhaja" data-aos="fade-up" date-aos-delay="100">
      <div class="Menu">
        <ul class="Menu-list" data-offset="10">
          <li class="Menu-list-item" data-offset="20" onclick>
            Hannibal RP
            <a href="#hannibal"><span class="Mask"><span>Hannibal RP</span></span>

              <span class="Mask"><span>Hannibal RP</span></span></a>
          </li>

          <li class="Menu-list-item" data-offset="12" onclick>
            Our Team
            <a href="#team"> <span class="Mask"><span>Our Team</span></span>
              <span class="Mask"><span>Our Team</span></span></a>
          </li>

          <li class="Menu-list-item" data-offset="8" onclick>
            Contact
            <a href="#cont"><span class="Mask"><span>Contact</span></span>

              <span class="Mask"><span>Contact</span></span></a>

          </li>
        </ul>
      </div>

    </section>
    <a name="hannibal"></a>

    <!-- begins Sec 3 -->
    <!-- End SEC3 -->
    <center>
      <div id="wrapper" data-aos="fade-up" date-aos-delay="100" style="margin-bottom: 10ch;">
        <div class="phone view_3" id="phone_1">
          <iframe src="https://discord.com/widget?id=890444125520953374&theme=dark" id="frame_1"></iframe>
          <iframe src="https://discord.com/widget?id=890444125520953374&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
        </div>
      </div>
      <div id="controls">
        <div>
          <label for="iframeURL">URL:</label>
          <input type="text" id="iframeURL" placeholder="https://openwhyd.org/mobile/" value="https://discord.com/widget?id=890444125520953374&theme=dark" />
        </div>
        <div>
          <label for="iframeWidth">Width:</label>
          <input type="number" id="iframeWidth" placeholder="320" value="320" />
        </div>
        <div>
          <label for="iframeHeight">Height:</label>
          <input type="number" id="iframeHeight" placeholder="520" value="520" />
        </div>

        <div>
          <label for="iframePerspective">Add perspective:</label>
          <input type="checkbox" id="iframePerspective" checked="true" />

        </div>

      </div>
    </center>

    <!-- begins Sec4 -->
    <a name="team"></a>

    <center>
      <section id="sec4" data-aos="fade-up" date-aos-duration="100">
        <center>
          <div class="title" data-aos="fade-up">Our Team</div>
        </center><br><br>
        <center>
          <div class="left">This is our team who's actif 24/7 and always ready for any problem... Read More to discover the full team❤❤ Click in any box below to see all the rest of the team🔥</div>
        </center><br><br><br><br>
        <ol class="articles">
          <li class="articles__article" style="--animation-order:1"><a class="articles__link" href="team.php">
              <div class="articles__content articles__content--lhs">
                <center>
                  <h2 class="articles__title" style="color: #ff2c75;">CO-FOUNDER</h2>
                </center>
                <img src="images/hanniballogo.png" alt="">
                <div class="articles__footer">
                </div>
              </div>
              <div class="articles__content articles__content--rhs" aria-hidden="true">
                <center>
                  <h2 class="articles__title" style="color: #ff2c75;">CO-FOUNDER</h2>
                </center>
                <img src="images/hanniballogo.png" alt="">
                <div class="articles__footer">
                </div>
              </div>
            </a></li>
          <li class="articles__article" style="--animation-order:2,margin:auto auto "><a class="articles__link" href="team.php">
              <div class="articles__content articles__content--lhs">
                <center>
                  <h2 class="articles__title" style="color: #ff2c75;">FOUNDER</h2>
                </center>
                <img src="images/hanniballogo.png" alt="">
                <div class="articles__footer">
                </div>
              </div>
              <div class="articles__content articles__content--rhs" aria-hidden="true">
                <center>
                  <h2 class="articles__title" style="color: #ff2c75;">FOUNDER</h2>
                </center>
                <img src="images/hanniballogo.png" alt="">
                <div class="articles__footer">
                </div>
              </div>
            </a></li>
          <li class="articles__article" style="--animation-order:2,margin:auto auto "><a class="articles__link" href="team.php">
              <div class="articles__content articles__content--lhs">
                <center>
                  <h2 class="articles__title" style="color: #ff2c75;">STAFF</h2>
                </center>
                <img src="images/hanniballogo.png" alt="">
                <div class="articles__footer">
                </div>
              </div>
              <div class="articles__content articles__content--rhs" aria-hidden="true">
                <center>
                  <h2 class="articles__title" style="color: #ff2c75;">STAFF</h2>
                </center>
                <img src="images/hanniballogo.png" alt="">
                <div class="articles__footer">
                </div>
              </div>
            </a></li>
        </ol>
        <a name="cont"></a>

      </section>
    </center>



    <section class="ftco-section" style="margin-top: -55ch;" data-aos="fade-up" date-aos-delay="100">
      <div class="container">
        <CENTER>
          <div class="title con" id="responsive">CONTACT US</div>
        </CENTER><br><br>
        <div class="row justify-content-center">
          <div class="col-lg-10 col-md-12">
            <div class="wrapper">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <div class="contact-wrap">
                    <div id="form-message-warning" class="mb-4 w-100 text-center"></div>
                    <div id="form-message-success" class="mb-4 w-100 text-center">
                      Your message was sent, thank you!
                    </div>
                    <form action="contact.php" method="post" id="contactForm" name="contactForm" class="contactForm">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Discord Name">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="email" class="form-control" id="email" disabled value="<?php echo $_SESSION['name']; ?>">
                            <input type="hidden" name="email" value="<?php echo $_SESSION['name']; ?>">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="8" placeholder="Message"></textarea>
                            &nbsp;<span style="color: red;" id="p1"></span> </p>
                          </div>
                        </div>
                        <?php if (isset($_GET['error'])) { ?>
                          <p class="error">&nbsp;&nbsp;<?php echo $_GET['error']; ?></p>
                        <?php } ?>

                        <?php if (isset($_GET['success'])) { ?>
                          <p class="success">&nbsp;&nbsp;<?php echo $_GET['success']; ?></p>
                        <?php } ?>

                        <div id="responseMessage"></div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="submit" id="submit" name="submit" value="Send Message" class="subhere" style="color:#10ffff; background-color: #ff2c75; width: 17ch; height: 4ch;border-radius: 7px;">
                            <div class="submitting"></div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </form>
    <link rel="stylesheet" href="style.css">


    </div>

  </main><!-- End #main -->
  <script>
    function maFonction() {
      document.getElementById("p1").innerHTML = "FAIL";
    }
  </script>



  <!-- ======= Footer ======= -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>Hannibal RP</h4>
          <ul>
            <li><a href="#hannibal">About us</a></li>
            <li><a href="team.php">Our Team</a></li>
            <li><a href="rules.php">Rules</a></li>
          </ul>
        </div>
        <div class="footer-col foot" style="width: 40%;">
          <center>Copyright @2025 | Developed by <a href="https://www.instagram.com/nemss___/?hl=fr"><span title="Disocrd: NEMSS#8451"> NEMSS.</span></a><br>
            All Rights Are Reserved.</center>
        </div>
        <div class="footer-col ml-auto">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="https://www.facebook.com/groups/1225238134664912"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/saison_1_qbus/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCKmUbLZhIlBvTjyhSuV35zA"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div><br><br>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- php begins here -->

  <script>
    function verif() {
      var nm = document.getElementById("name").value;
      var em = document.getElementById("email").value;
      var sb = document.getElementById("subject").value;
      var ms = document.getElementById("message").value;
      B = true;
      if (nm == "" || em == "" || sb == "" || ms == "") {
        document.getElementById("p1").innerHTML = "All fields are required!!";
        B = false;
      }
      return B
    }
  </script>

  <script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent default form submit (reload)

      const form = event.target;
      const formData = new FormData(form);
      const responseMessage = document.getElementById('responseMessage');

      fetch('contact.php', {
          method: 'POST',
          body: formData
        })
        .then(response => response.json())
        .then(data => {
          if (data.status === 'success') {
            responseMessage.style.color = 'green';
            form.reset(); // Clear form fields
          } else {
            responseMessage.style.color = 'red';
          }
          responseMessage.textContent = data.message;
        })
        .catch(error => {
          responseMessage.style.color = 'red';
          responseMessage.textContent = 'An error occurred. Please try again later.';
          console.error('Error:', error);
        });
    });
  </script>







  <!-- php ends here -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    var loader = document.getElementById("preloader");
    window.addEventListener("load", function() {
      loader.style.display = "none"
    })
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 50,
      duration: 2000,
    });
  </script>




  <script src="assets-pre/vendor/jquery/jquery.min.js"></script>
  <script src="assets-pre/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets-pre/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets-pre/vendor/php-email-form/validate.js"></script>
  <script src="assets-pre/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets-pre/vendor/counterup/counterup.min.js"></script>
  <script src="assets-pre/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets-pre/vendor/venobox/venobox.min.js"></script>
  <script src="assets-pre/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets-pre/vendor/typed.js/typed.min.js"></script>
  <script src="assets-pre/vendor/aos/aos.js"></script>


  <!-- Template Main JS File -->
  <script src="assets-pre/js/main.js"></script>
  <script src="assets-pre/js/main.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/form.js"></script>



</body>

</html>
<style>
  #ga3 {
    position: relative;
    font-family: 'Montserrat', Arial, sans-serif;
    font-size: calc(20px + 5vw);
    font-weight: 700;
    color: #fff;
    letter-spacing: 0.02em;
    text-transform: uppercase;
    text-shadow: 0 0 0.15em #e91e63;
    user-select: none;
    white-space: nowrap;
    filter: blur(0.007em);
    animation: shake 2.5s linear forwards;
  }

  #ga3 span {
    position: absolute;
    top: 0;
    left: 0;
    transform: translate(-50%, -50%);
    -webkit-clip-path: polygon(10% 0%, 44% 0%, 70% 100%, 55% 100%);
    clip-path: polygon(10% 0%, 44% 0%, 70% 100%, 55% 100%);
  }

  #ga3::before,
  #ga3::after {
    content: attr(data-text);
    position: absolute;
    top: 0;
    left: 0;
  }

  #ga3::before {
    animation: crack1 2.5s linear forwards;
    -webkit-clip-path: polygon(0% 0%, 10% 0%, 55% 100%, 0% 100%);
    clip-path: polygon(0% 0%, 10% 0%, 55% 100%, 0% 100%);
  }

  #ga3::after {
    animation: crack2 2.5s linear forwards;
    -webkit-clip-path: polygon(44% 0%, 100% 0%, 100% 100%, 70% 100%);
    clip-path: polygon(44% 0%, 100% 0%, 100% 100%, 70% 100%);
  }

  @keyframes shake {

    5%,
    15%,
    25%,
    35%,
    55%,
    65%,
    75%,
    95% {
      filter: blur(0.018em);
      transform: translateY(0.018em) rotate(0deg);
    }

    10%,
    30%,
    40%,
    50%,
    70%,
    80%,
    90% {
      filter: blur(0.01em);
      transform: translateY(-0.018em) rotate(0deg);
    }

    20%,
    60% {
      filter: blur(0.03em);
      transform: translate(-0.018em, 0.018em) rotate(0deg);
    }

    45%,
    85% {
      filter: blur(0.03em);
      transform: translate(0.018em, -0.018em) rotate(0deg);
    }

    100% {
      filter: blur(0.007em);
      transform: translate(0) rotate(-0.5deg);
    }
  }

  @keyframes crack1 {

    0%,
    95% {
      transform: translate(-50%, -50%);
    }

    100% {
      transform: translate(-51%, -48%);
    }
  }

  @keyframes crack2 {

    0%,
    95% {
      transform: translate(-50%, -50%);
    }

    100% {
      transform: translate(-49%, -53%);
    }
  }
</style>
<script src="https://ugsamp.com/assets/libs/typed.js/lib/typed.min.js"></script>

<!-- Initialize Typed.js -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    new Typed('#type-ugrpg', {
      strings: ["annibal RP"],
      typeSpeed: 100,
      backSpeed: 50,
      loop: true
    });
  });
</script>