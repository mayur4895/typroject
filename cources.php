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
  
 <!-------------header  end -----------------> 
 
 
 
<!----------------- courses------------------------->
 <section id="cource"> 
  <div class="container-fluid  course_container px-lg-5" > 
   <h3 class="section_title text-center">Courses</h3>
    <br><br>
    <div class="text-center">
      <div class="course_content d-flex flex-wrap justify-content-center  " >
            <div class="course_card card d-flex text-center  align-items-center rounded-3 m-lg-4 m-2">
              <div class="card_content">
              <div class="cource_img">
                <img src="img/html5-2.png" alt="" srcset="">
              </div>
              <div class="course_info">
                <h3 class="course_name">HTML/CSS</h3>
                <p class="course_desc">HTML and CSS course advanced</p>
                <div class="price_info">
                  <span class="price">500&#8377; </span>
                  <a href="#" class="btn button">Enroll</a>
                </div>
              </div>
              </div>
          </div>
  
          <div class="course_card card d-flex text-center  align-items-center rounded-3 m-lg-4 m-2">
            <div class="card_content">
            <div class="cource_img">
              <img src="img/github.png" alt="" srcset="">
            </div>
            <div class="course_info">
              <h3 class="course_name">GitHub</h3>
              <p class="course_desc">All concepts of github and <br> git
                All concepts of github andAll concepts of github andAll concepts of github and paddin !important;</p>
              <div class="price_info">
                <span class="price">500&#8377; </span>
                <a href="#" class="btn button">Enroll</a>
              </div>
            </div>
            </div>
        </div>
          
          <div class="course_card card d-flex text-center  align-items-center rounded-3 m-lg-4 m-2">
            <div class="card_content  ">
            <div class="cource_img">
              <img src="img/js.png" alt="" srcset="">
            </div>
            <div class="course_info   ">
              <h3 class="course_name">Advanced Javascript</h3>
              <p class="course_desc">beginer to advanced javascript</p>
              <div class="price_info">
                <span class="price">500&#8377; </span>
                <a href="#" class="btn button">Enroll</a>
              </div>
            </div>
            </div>
        </div>

        <div class="course_card card d-flex text-center  align-items-center rounded-3 m-lg-4 m-2">
          <div class="card_content">
          <div class="cource_img">
            <img src="img/html5-2.png" alt="" srcset="">
          </div>
          <div class="course_info">
            <h3 class="course_name">HTML/CSS</h3>
            <p class="course_desc">HTML and CSS course advanced</p>
            <div class="price_info">
              <span class="price">500&#8377; </span>
              <a href="#" class="btn button">Enroll</a>
            </div>
          </div>
          </div>
        </div>

        <div class="course_card card d-flex text-center  align-items-center rounded-3 m-lg-4 m-2">
        <div class="card_content">
        <div class="cource_img">
          <img src="img/github.png" alt="" srcset="">
        </div>
        <div class="course_info">
          <h3 class="course_name">GitHub</h3>
          <p class="course_desc">All concepts of github and <br> git
            All concepts of github andAll concepts of github andAll concepts  !important;</p>
          <div class="price_info">
            <span class="price">500&#8377; </span>
            <a href="#" class="btn button">Enroll</a>
          </div>
        </div>
        </div>
        </div>

  <div class="course_card card d-flex text-center  align-items-center rounded-3 m-lg-4 m-2">
  <div class="card_content  ">
  <div class="cource_img">
  <img src="img/js.png" alt="" srcset="">
  </div>
  <div class="course_info   ">
  <h3 class="course_name">Advanced Javascript</h3>
  <p class="course_desc">beginer to advanced javascript</p>
  <div class="price_info">
    <span class="price">500&#8377; </span>
    <a href="#" class="btn button">Enroll</a>
  </div>
  </div>
  </div>
 
</div>
 
</div>
 

 </section>

 <br><br> <br>  
  <!-- ========================  footer start===================== -->
  <?php
  include("reusecomponent/footer.php")
  ?>
  
  <!-- ========================  footer end===================== -->   
  <script src="js/ajax.js"></script>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>