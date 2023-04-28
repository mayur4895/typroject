<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    
 
    <div class="container-fluid signup_container "  > 
      
        <div class=" ">   
        <form action=""  class="form_content "  method="POST"  id="stuRegForm">
         <h3 class="form_title">signup</h3>
        
          <span  id="msg"></span> 
     
        <div class="form_input  "> 
        <small class="stuname_msg error text-danger position-absolute mx-2" style="top:-40%"></small>
         <input type="text" placeholder="Full name" name="name" id="stuname" class="input  " required>
 
        </div>
        <div class="form_input"> 
        <small class="stuemail_msg error text-danger position-absolute mx-2" style="top:-40%"></small>
            <input type="email" placeholder="Emial address" name="email"  id="stuemail"class="input" required> 
        </div>
        <div class="form_input"> 
        <small class="stuphone_msg error text-danger position-absolute mx-2" style="top:-40%"></small>
            <input type="mobiles" placeholder= "Phone Number" name="phone" id="stuphone" class="input" required> 
        </div>
        <div class="form_input"> 
        <small class="stupass_msg error text-danger position-absolute mx-2" style="top:-40%"></small>
            <input type="password" placeholder="Create password"   name="password" id="stupass"  class="input" autocomplete="false" required>
        </div> 
        <button type="submit" onclick="addstu()" name="submit" class="button account"    >Create account</button> 
    
        <p class="login">have an account? <a href=" login.php" style="color:royalblue;" >login</a></p>
        </form>
    
    </div>
    </div>



    <script src="js/jquery.min.js"></script>
  <script src="js/ajax.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
 
</body>
</html>