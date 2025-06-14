<!-- All licence and rights are reserved!! this website is developed by Nemss nd u can't take any script of this website
     without permission...
     If u want somthing just contact him :
     IG: nemss__
     Discord: NEMSS#8451
 -->
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="short icon" href="">
    <link rel="stylesheet" href="badri.css">
    <link rel="stylesheet" href="account/style.css">
    <link href="images/hannibal.png" rel="icon">
  <link href="images/hannibal.png" rel="apple-touch-icon">
    <title>Hannibal RP - Pseudo Management</title>
</head>
<body>
    <header>
        <img src="images/offmaybe.gif" alt="LOGO" title="HB LOGO">
        <b class="nemss" style="color: #ff2c75; font-family: Georgia, 'Times New Roman', Times, serif;">Hello , <?php echo $_SESSION['user_name']; ?></b>
    </header>
    <div class="navphone">
        <table>
            <tr>
                <th class="title"><a href="accmg.php">Account Informations</a></th>
                <th class="title"><a href="pseudo.php"  style="color: blue;">Change pseudo</a></th>
                <th class="title"><a href="mail.php">Change Mail-Adresse</a></th>
                <th class="title"><a href="password.php">Change Password</a></th>
                <th class="title"><a href="home.php">Back To Home Page</a></th>
                <th class="title"><a href="account/logout.php">Log-Out</a></th>

            </tr>
        </table>

    </div>
    <div class="navigation">
    <ul>
        <li class="list">
            <a href="accmg.php">
                <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                <span class="title"> Account Informations </span>
            </a>
        </li>
        <li class="list  active">
            <a href="pseudo.php">
                <span class="icon"><ion-icon name="accessibility-outline"></ion-icon></span>
                <span class="title">Change pseudo</span>
            </a>
        </li>
        <li class="list">
            <a href="mail.php">
                <span class="icon"><ion-icon name="at-outline"></ion-icon></span>
                <span class="title">Change Mail-Adresse</span>
            </a>
        </li>    
         <li class="list">
            <a href="password.php">
                <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                <span class="title">Change Password</span>
            </a>
        </li>   
        <li class="list">
            <a href="home.php">
                <span class="icon"><ion-icon name="arrow-back-circle-outline"></ion-icon></span>
                <span class="title">Back To Home Page</span>
            </a>
        </li>
        <br>
        <hr width="25%" style="margin: auto;">
        <li class="list">
            <a href="account/logout.php">
                <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                <span class="title">Log-Out</span>
            </a>
        </li>
    </ul>
</div>
<center><hr width="50%" style="height: 2ch ;background: linear-gradient(90deg, lightpink,lightblue); border-radius:3vh;"></center>
<div class="west" >
    <form action="change-pu.php " method="post">
        <h2>Change Pseudo</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
           <p class="success"><?php echo $_GET['success']; ?></p>
       <?php } ?>
        <label>Old Pseudo</label>
        <input type="text" 
               name="opu" 
               placeholder="Old Pseudo">
               <br>

        <label>New Pseudo</label>
        <input type="text" 
               name="npu" 
               placeholder="New Pseudo">
               <br>


        <button type="submit">CHANGE</button>
    </form>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
    const list = document.querySelectorAll('.list');
    function activeLink(){
        list.forEach((item)=>
        item.classList.remove('active'));
        this.classList.add('active');
    }
    list.forEach((item)=>
    item.addEventListener('click',activeLink));
</script>
</body>
</html>
<?php 
}else{
     header("Location: ../home.php");
     exit();
}
 ?>