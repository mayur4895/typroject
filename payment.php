<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body> 
 <!-------------header start ----------------->
  <?php
  include("reusecomponent/header.php")
  ?>
  
 <!------------- cource container -----------------> 
 <div class="container-fluid bg-danger cource_container  m-0 p-0  justify-content-center align-items-center h-100" > 
<img src="img/landscap.jpg" alt="" srcset="">
 </div>  
      

 <img src="img/landscap.jpg" alt="" srcset="">

<br><br>
 <div class="container-fluid   text-center">
<h3>payment Status</h3>
  <div class="order_input bg-light border p-3  ">
    <input type="text"   placeholder="order_ID"  class="p-3 w-40 outline-none" />
     <buton class="btn button   order_btn">View</buton>
  </div>
 </div>
 
  <!-------------  contact container -----------------> 
 <section class="contact section container-fluid pl-lg-5  " id="contact">
    <h2 class="section_title text-center">Contact Me</h2>
    <h6 class="section_subtitle text-center">Get in Touch</h6> 
    <br>
        <div class="contact_container row my-3">
          <div class="col-md-6 col-lg-6">
            <div class="contact_information">
              <i class="ri-phone-line contact-icon"></i>
              <div>
                <h5 class="contact_title">Call Me</h5>
                <span class="contact_subtitle">8855964895</span>
              </div>
            </div>

               <div class="contact_information">
                <i class="ri-mail-open-line contact-icon"></i>
              <div>
                <h5 class="contact_title">Email</h5>
                <span class="contact_subtitle">kssmsslss330@gmail.com</span>
              </div>
            </div>

               <div class="contact_information">
                <i class="ri-map-pin-line contact-icon"></i>
              <div>
                <h5 class="contact_title">Location</h5>
                <span class="contact_subtitle">pimple Gurav,pune 27</span>
              </div>
            </div>
          </div>

          <form action="" class="contact_form col-md-6  col-lg-6"> 
              <div class="contact_content"> 
              <input type="text" class="contact_input" placeholder="Name">
              </div>

              <div class="contact_content"> 
              <input type="email" class="contact_input" placeholder="Email">
              </div> 
              <div class="contact_content"> 
              <input type="text" class="contact_input" placeholder="Subject">
              </div>
                <div class="contact_content"> 
              <textarea    class="contact_input" placeholder="Message"></textarea>
              </div>

              <div>
                <a href="#" class="button button--flex">
                  Send Message
                  <i class="ri-send-plane-fill"></i>
                </a>
              </div>
          </form>
        </div>
    </section>
 

 
  <!-- ========================  footer start===================== -->
  <?php
  include("reusecomponent/footer.php")
  ?>
  
  <!-- ========================  footer end===================== -->   
  <script src="js/ajax.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.min.js"></script>
</body>
</html>