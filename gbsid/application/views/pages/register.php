<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GBSID - Register</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>login/css/style.css">

    
</head>
<body>
    <div class="col-xs-3">
    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action = "<?php echo site_url('user/register/new');?>" id="signup-form" class="signup-form">
                        <h2 class="form-title">Create account</h2>
                        <?php
                                    if($api_status == "Please enter all fields"){
                                ?>
                                <p style="color:red;">
                                    <?php echo "Please Enter all Fields!";?> 
                                </p>
                            

                                <?php
                                    }else if($api_status == "registered") {
                                ?>
                                <p style="color:green;">
                                    <?php echo  "User Registered, Please Login!";?> </p>

                                <?php
                                    }else if($api_status == "User already exists") {
                                ?>
                                <p style="color:green;">
                                    <?php echo  "User Registered, Please Login!";?> </p>
                                <?php } ?>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                        </div>
                        <div class="form-group" >
                            <label class="radio-inline"><input type="radio" name="usertype" value ="seller" checked>Seller</label>
                           <label class="radio-inline"><input type="radio" name="usertype" value = "business">Business</label>
                        </div>

                        <br>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="<?php echo site_url('user/login');?>" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>
    </div>                              
    <!-- End for Confirm Success -->
    <!-- JS -->
    <script src="<?php echo base_url()."assets/";?>login/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>login/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>