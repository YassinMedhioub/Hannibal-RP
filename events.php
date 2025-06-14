<!doctype html>
<html lang="en">


<head>

  <!--====== Required meta tags ======-->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
  <style>
    @import url('https://fonts.googleapis.com/css?family=Cabin|Herr+Von+Muellerhoff|Source+Sans+Pro:400,900&display=swap');
  </style>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

  <!--====== Title ======-->
  <title>Hannibal RP - Events</title>

  <!--====== Favicon Icon ======-->

  <!--====== Bootstrap css ======-->
  <link rel="stylesheet" href="assety/css/bootstrap.min.css">

  <!--====== Flaticon css ======-->
  <link rel="stylesheet" href="assety/css/flaticon.css">

  <!--====== Line Icons css ======-->
  <link rel="stylesheet" href="assety/css/LineIcons.css">

  <!--====== Animate css ======-->
  <link rel="stylesheet" href="assety/css/animate.css">

  <!--====== Slick css ======-->
  <link rel="stylesheet" href="assety/css/slick.css">

  <!--====== Default css ======-->
  <link rel="stylesheet" href="assety/css/default.css">

  <!--====== Style css ======-->
  <link rel="stylesheet" href="assety/css/style.css">

  <?php
  session_start();

  if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?>
</head>

<body>
  <header id="header" name="header" class="fixed-top d-flex align-items-center header-transparent" style="background-color: #7e011e;">
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
          <li><a href="home.php"><i class="fas fa-home"></i>&nbsp; Home</a></li>
          <li><a href="rules.php"><i class="fad fa-tasks"></i></i></i></i></i>&nbsp;Rules</a></li>
          <li><a class="active " href="events.php"><i class="far fa-calendar-check"></i>&nbsp;Events</a></li>
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
  </header>



  <header class="header-area" style=" width:100%;">

    <div id="home" class="header-content-area bg_cover d-flex align-items-center" style="background-image: url(images/citylogo.jpg)">
      <div class="container">
        <div>
          <center>
            <h1 style="color:#fff;font-family:Herr Von Muellerhoff, cursive,georgia,sans-serif;font-size:10ch;font-weight: 100;line-height: .4;animation: faderight .5s forwards;animation-delay: .5s;"> Next event will start during</h1>
          </center>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div data-countdown="2025/08/01"></div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section id="about" class="about-area pb-130 pt-80">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="about-image mt-50 wow fadeInLeft" data-wow-duration="1s"><br>
            <center><img src="images/affiche-event.png" alt="About" style="width:28ch"></center>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-content mt-45 wow fadeInRight" data-wow-duration="1s">
            <div>
              <marquee SCROLLAMOUNT=18>
                <h2 style="font-family: Georgia, 'Times New Roman', Times, serif;color:#1863ff;;">Fight Champions ⚡Champions Series Gangsters N°1 🔥</h2>
              </marquee>
            </div>

            <p class="text mt-30" style="color: white;">
              Week Qualification 08-01-2022<br>
              Week Final 15-01-2022<br>

              Evry Teams Got 5 Players <br>

              Registration In Private Msg<br>

              NB:Any Player Can Participate With Full Team (5players).<br>
            </p>
            <p class="date"><span>08<sup>th</sup> January’ 2022</span></p>
          </div>
        </div>
      </div>
    </div>
  </section>

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
          <center>Copyright @2022 | Developed by <a href="https://www.instagram.com/nemss___/?hl=fr"><span title="Disocrd: NEMSS#8451"> NEMSS.</span></a><br>
            All Rights Are Reserved.</center>
        </div>
        <div class="footer-col ml-auto">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="https://www.facebook.com/groups/1225238134664912"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCKmUbLZhIlBvTjyhSuV35zA"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div><br><br>
    </div>
  </footer>










  <!--====== jquery js ======-->
  <script src="assety/js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="assety/js/vendor/jquery-1.12.4.min.js"></script>

  <!--====== Bootstrap js ======-->
  <script src="assety/js/bootstrap.min.js"></script>
  <script src="assety/js/popper.min.js"></script>

  <!--====== Counter Up js ======-->
  <script src="assety/js/waypoints.min.js"></script>
  <script src="assety/js/jquery.counterup.min.js"></script>

  <!--====== Slick js ======-->
  <script src="assety/js/slick.min.js"></script>

  <!--====== Magnific Popup js ======-->
  <script src="assety/js/jquery.magnific-popup.min.js"></script>

  <!--====== Scrolling Nav js ======-->
  <script src="assety/js/jquery.easing.min.js"></script>
  <script src="assety/js/scrolling-nav.js"></script>

  <!--====== Countdown js ======-->
  <script src="assety/js/jquery.countdown.min.js"></script>

  <!--====== wow js ======-->
  <script src="assety/js/wow.min.js"></script>


  <!--====== Main js ======-->
  <script src="assety/js/main.js"></script>
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

</body>

</html>