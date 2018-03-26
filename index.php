<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

<!--  <?php include('login_sign_up.php') ?>
 -->
<h2><center><b>Login & Signup</center></b></h2>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      <div class="tab-content">
        <div id="signup">  
        <div id = "error" style="color: #FFF"> <?php include('login_sign_up.php') ?></div>
           

          
          <form action="" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
            <p><input id="First_Name" name="First_Name" type="text" placeholder="First_Name" required autocomplete="off"></p>
             
            </div>
        
            <div class="field-wrap">
             <p><input id="Last_name" name="Last_name" type="text" placeholder="Last_name" required autocomplete="off"></p>
          
            </div>
          </div>
		  
		  <div class="field-wrap">
           <p><input id="Mobile" name="Mobile" type="text" placeholder="Mobile" required autocomplete="off"></p>
         
          </div>

          <div class="field-wrap">
            <p><input id="Email" name="Email" type="text" placeholder="Email" required autocomplete="off"></p>
         
          </div>
          
          <div class="field-wrap">
            <p><input id="Password" name="Password" type="password" placeholder="Password" required autocomplete="off"></p>
           
          </div>
          
         <p> <input name="action" type="hidden" value="signup" /></p>
          <p><input type="submit" value="Signup" /></p>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="" method="post">
          
            <div class="field-wrap">
             <p><input id="email" name="email" type="text" placeholder="Email" required autocomplete="off"/></p>
            
          </div>
          
          <div class="field-wrap">
           <p><input id="password" name="password" type="password" placeholder="Password" required autocomplete="off"/></p>
            
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
           <p> <input name="action" type="hidden" value="login" /></p>
            <p><input type="submit" value="Login" /></p>
          
          </form>

        </div>
        
      </div>
      
</div> 
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
