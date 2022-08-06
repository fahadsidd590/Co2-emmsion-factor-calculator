
    <!--HEADER-->
    <header>
        <div class="header">
            <section>
                <span class="cross parallelogram">
                
                    <img src="./assets/images/LOGOsmall.png"  width="70%" class="logo skew-fix"alt="LOGO.">
                </span>
            </section>
            <section>
                <div class=" top-tab ">
                    <span>
                        <a href="tel:0000000000"><i class="fa fa-phone"></i> (+0)-000-0000-000</a>
                        <a href="emailto:support@websitename.com"><i class="fa fa-envelope"></i>
                            support@websitename.com</a>
                    </span>
                    <span>
                    <?php if(!isset($_SESSION['username'])){ ?>
                    <a href="./login.php?login=login" class="active button1">Login</a>
                    <a href="./signup.php" class="active button1">Signup</a>
                    <?php }else{?>
                    <a href="./index.php?login=Logout" class="active  button1">Logout</a>
                    <?php }?>
                    </span>
                </div>
                <div class="topnav" id="myTopnav">
                   <img src="./assets/images/LOGOsmall.png" id="res_logo"  class="logo skew-fix"alt="LOGO.">
                    <a href="./index.php" class="active">Forside </a>
                    <a href="./Introduktion.php">Introduktion </a>
                    <?php if(isset($_SESSION['username'])){ ?>
                    <a href="./beregning.php">Beregning</a>                    
                    <a href="./result.php">Resultat</a>
   
                    <?php } else{ ?>
                        
                    
                    <?php }?>
                    <a href="javascript:void(0);" style="font-size:15px;" class="icon"
                        onclick="myFunction()">&#9776;</a>
                </div>
            </section>
        </div>
    </header> 