<!-- All licence and rights are reserved!! this website is developed by Nemss nd u can't take any script of this website
     without permission...
     If u want somthing just contact him :
     IG: nemss__
     Discord: NEMSS#8451
 -->
<!DOCTYPE html>
<html>
<head>
	<title>Hannibal RP - Sign Up</title>
	<link rel="stylesheet" type="text/css" href="styly.css">
     <link href="../images/hannibal.png" rel="icon">
     <link href="../images/hannibal.png" rel="apple-touch-icon">
</head>
<body>
<h1 id="ga3" data-text=" Hannibal RP"><span>Hannibal RP</span></h1>
     <form action="signup-check.php" method="post">
        <h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Email Adresse</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="email" 
                      name="name" 
                      placeholder="Email Adresse"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="email" 
                      name="name" 
                      placeholder="Email Adresse"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>
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
    5%, 15%, 25%, 35%, 55%, 65%, 75%, 95% {
        filter: blur(0.018em);
        transform: translateY(0.018em) rotate(0deg);
    }

    10%, 30%, 40%, 50%, 70%, 80%, 90% {
        filter: blur(0.01em);
        transform: translateY(-0.018em) rotate(0deg);
    }

    20%, 60% {
        filter: blur(0.03em);
        transform: translate(-0.018em, 0.018em) rotate(0deg);
    }

    45%, 85% {
        filter: blur(0.03em);
        transform: translate(0.018em, -0.018em) rotate(0deg);
    }

    100% {
        filter: blur(0.007em);
        transform: translate(0) rotate(-0.5deg);
    }
}

@keyframes crack1 {
    0%, 95% {
        transform: translate(-50%, -50%);
    }

    100% {
        transform: translate(-51%, -48%);
    }
}

@keyframes crack2 {
    0%, 95% {
        transform: translate(-50%, -50%);
    }

    100% {
        transform: translate(-49%, -53%);
    }
}
</style>