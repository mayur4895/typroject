 <?php

include("../dbconnection.php");
 


// checking email exist or not

if(isset($_POST['checkemail']) && isset($_POST['stuemail']) ){
  $stuemail = $_POST['stuemail'];
  $sql = "SELECT stu_email FROM student WHERE stu_email = '$stuemail'";
  $result = $conn->query($sql);
  $row = $result->num_rows;
  echo json_encode($row);
}

  
 
if(isset($_POST['stusignup']) && isset($_POST['stuname']) && isset($_POST['stuemail']) && isset($_POST['stuphone']) && isset($_POST['stupass'])){
 
  $stuname =  $_POST['stuname'];
 $stuemail = $_POST['stuemail'];
 $stuphone = $_POST['stuphone'];
 $stupass =  $_POST['stupass']; 
 
   $pass = password_hash($stupass ,PASSWORD_BCRYPT); 
   $sql = "INSERT INTO student(stu_name,stu_email,stu_phone,stu_pass) VALUES('$stuname' ,'$stuemail', '$stuphone','$pass')"; 
  if($conn->query($sql) == TRUE){ 
          echo json_encode("Ok");
    }else{
            echo json_encode("Faild");
    } 
    }   
    
 
 






 //checking login 

 if(isset($_POST['stulogin']) && isset($_POST['stuLogEmail']) && isset($_POST['stuLogPass'])){
 
  $stuLogEmail =  $_POST['stuLogEmail'];
  $stuLogPass = $_POST['stuLogPass']; 
 
     $emailserch = " select * from student where stu_email = '$stuLogEmail'";
     $query = mysqli_query($conn,$emailserch); 
     $emailcount = mysqli_num_rows($query);

     if($emailcount){ 
        $email_pass = mysqli_fetch_assoc($query);  
        $db_pass = $email_pass['stu_pass']; 
        $pass_decode = password_verify($stuLogPass,$db_pass);

        $sql = "SELECT stu_email,stu_pass FROM student WHERE stu_eamil='$stuLogEmail' AND stu_pass = '$db_pass'";

        if($conn->query($sql) == TRUE){ 
          echo json_encode("login");
        }else{
            echo json_encode("login faild");
        } 
        }   
      }

?>
 