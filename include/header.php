<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css\index-style.css">
    <link rel="stylesheet" href="css\chalo_card.css">
    <link rel="stylesheet" href="css\css.css">
    <!--<link rel="stylesheet" href="css\gallery.css">-->
    <title>Chalo Website</title>
</head>

<body>
    <script src="JS\header.js"></script>
    <header>
        <nav class="nav1">
            <div class="div1">
                <img src="Images\chalologo2.png" height="70px">
                <ul class="ul1">
                    <li>
                        <a href="index.php" class="a1">Chalo App</a>
                    </li>
                    <li>
                        <a href="chalo_card.php" class="a1">Chalo Card</a>
                    </li>
                    <li>
                        <a href="mobile_pass.php" class="a1">Mobile Pass</a>
                    </li>
                    <li>
                        <a href="mobile_ticket.php" class="a1">Mobile Ticket</a>
                    </li>
                    <?php
                if (isset($_SESSION["username"])){
                    ?>
                    <li>
                        <a href="Studentplan.php" class="a1">Student Plans</a>
                    </li>
                <?php
                }?>
                </ul>
            </div>
            
            <div class="div3">
            <?php
                if (isset($_SESSION["username"])){
                    
                    echo "<font size='+2'><b><label  for=''>Hi ".$_SESSION['username']." </label></b></font>&nbsp;&nbsp;";

                    echo '<a href="dbfiles/logout.inc.php"><button class=" log">
                    Logout
                    </button></a>';
                    }
                
                else {
                   
                    echo '<button class=" log login-button">
                    Login/SignUp
                    </button>';
                }

                    ?> 
                <button class="butn">
                    <a href='https://play.google.com/store/apps/details?id=app.zophop&amp;hl=en" target="_blank"' style="text-decoration:none;color:white;">
                    Download App</a>
                </button>
            </div>
        </nav>
        <hr>
    </header>
    <div class="wrapper ">
        <span id="icon-close" class="icon-close"><ion-icon name="close-sharp"></ion-icon></span>
        <!-- user login page -->
        <div class="box_login">
                <!-- <div class="clients">
                <span ><a href="#" >user</a></span>
                <span class=vendorlink><a href="#" >provider</a></span>
            </div> -->
            <h2>STUDENT LOGIN</h2>
            <form action="dbfiles/login.inc.php" method="post">
               <!-- name -->
               <div class="inputbox">
                 <span class="icon">
                        <ion-icon name="person-sharp"></ion-icon>
                        </span>
                    <input type="text" name="name" id="name"  required  >
                    <label for="">Email/Phone number</label>
                </div>
                <!-- password -->
                <div class="inputbox" >
                    <span class="icon">
                    <ion-icon name="lock-closed-sharp"></ion-icon>
                    </span>
                    <input type="password" name="psw" id="psw" required>
                    <label for="">Password</label>
                </div>
                <!-- login button -->
                <button type="submit" class="btn" name="submit">Login</button>
                <!-- msg -->
                <div class="register">
                    <!-- <a href="forgot.php" class="">Forgot Password?</a> -->
                    <p>Don't have an account? &nbsp;<a href="#" class="register-link">Register</a></p>
                    <!-- <p>Are you admin? &nbsp;<a href="../admin/index.php" class="register-link">Admin</a></p> -->
                </div>
                <?php
                if (isset($_GET["error"])){
                    if ($_GET["error"]== "namedontexist"){
                        echo "<script>alert('User not found.')</script>";
                    }
                    if ($_GET["error"]== "pwddontmatch"){
                        echo "<script>alert('wrong password.')</script>";
                    }
                }
                ?>
            </form>
        </div>
        <!-- register -->
        <div class="box_register">
            <h2>REGISTRATION FORM</h2>
            <form action="dbfiles/signup.inc.php" method="post" id="register_form">
                <!-- name -->
                <div class="inputbox">
                    <span class="icon">
                    <ion-icon name="person-sharp"></ion-icon>
                    </span>
                    <input type="text" name="name" id="rname" minlength="3" pattern="^[A-Za-z]{3}.*$" title="first 3 letters should be alphabets." required>  
                    <label for="">Name</label>
                </div>
                <!--age -->
                <div class="inputbox">
                    <span class="icon">
                    <!-- <ion-icon name="person-sharp"></ion-icon> -->
                    </span>
                    <input type="number" name="age" id="rage" min=12 max=30 title="The student age should be above 12." required>  
                    <label for="">Age</label>
                </div>
                <!-- Phone no -->
                <div class="inputbox">
                    <span class="icon">
                    <ion-icon name="call-sharp"></ion-icon>
                    </span>
                    <input type="tel" name="phone_no" id="rphone_no" title="Phone number needs to be in indian format."  required pattern="[6789][0-9]{9}" >
                    <label for="">Phone Number</label>
                </div>
                <!-- email -->
                <div class="inputbox">
                    <span class="icon">
                    <ion-icon name="mail-sharp"></ion-icon>
                    </span>
                    <input type="email" name="email" id="remail" title="Enter Your Email ID."  required  >
                    <label for="">Email</label>
                </div>
                <!-- clgname -->
                <div class="inputbox">
                    <span class="icon">
                    <ion-icon name="school-sharp"></ion-icon>
                    </span>
                    <input type="text" name="clgname" id="clgname"  title="Enter the College Name." required>  
                    <label for="">College Name</label>
                </div>
                <!-- clgid -->
                <div class="inputbox">
                    <span class="icon">
                    <ion-icon name="id-card-sharp"></ion-icon>
                    </span>
                    <input type="text" name="clgid" id="clgid" title="Enter College ID." required>  
                    <label for="">College ID</label>
                </div>
                <!-- password -->
                <div class="inputbox">
                    <span class="icon">
                    <ion-icon name="lock-closed-sharp"></ion-icon>
                    </span>
                    <input type="text" name="psw" id="psw"  minlength="8" title="Minimum 8 character needed." required>
                    <label for="">Password</label>
                </div>
                <!-- repeat password -->
                <!-- <div class="inputbox">
                    <span class="icon">
                    <ion-icon name="lock-closed-sharp"></ion-icon>
                    </span>
                    <input type="text" name="repeat_psw" id="rpsw" minlength="8" required>
                    <label for="">repeat password</label>
                </div> -->
                <button type="submit" class="btn" name="submit">Register</button>
                <div class="register">
                    <p>Already have an account? &nbsp;<a href="#" class="login-link">Login</a></p>
                </div>
                <?php
                if (isset($_GET["error"])){
                    if ($_GET["error"]== "emptyinput"){
                        echo "<script>alert('fill all the fields.')</script>";
                    }
                    else if ($_GET["error"]== "namehastaken"){
                        echo "<script>alert('User already exists with the given email/phone number, try to login.')</script>";
                    }
                    else if ($_GET["error"]== "none"){
                            echo "<script>alert('You registered successfully.')</script>";
                    }
                   
                
                }
                ?>
            </form>
        </div>
       
        <?php
                if (isset($_GET["error"])){
                    if ($_GET["error"]== "blocked"){
                        echo "<script>alert('You have been blocked by the admin.')</script>";
                    }
                }
                ?>
   </div>