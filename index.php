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
  <meta content="images/newone.png" name="description">
  <meta content="images/newone.png" name="keywords">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
  <link href="images/newone.png" rel="icon">
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

  <!-- Template Main CSS File -->
  <link href="assets-pre/css/style.css" rel="stylesheet">
  <?php
  session_start();

  if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?>
</head>

<body>
  <div id="preloader">
    <center><img src="images/off3d.gif" id="pr"></center>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" name="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

    </div>



  <?php
  }
  ?>

  </div>
  </header><!-- End Header -->
  <main>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">*
      <h1 id="ga3" data-text=" Hannibal RP" style="z-index: 1; margin:auto auto;"><span>Hannibal RP</span></h1>
    </section><!-- End Hero -->
    <a href="account/index.php"><button style="float:left; background-color:red;  z-index:1; color:white;">Login</button></a>
    <a href="account/signup.php"><button style="float:right; background-color:red; margin-right:-0.001vh; color:white; ">Signup</button></a>




    </section>

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
        duration: 50
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