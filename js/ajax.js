 
 
 
 
$(document).ready(function(){

 $("#stuemail").on("keypress blur" , function(){
   var stuemail = $("#stuemail").val();
   $.ajax({
      url:'student/addstudent.php',
      method:postMessage,
      data:{
         checkemail:"checkemail",
         stuemail:stuemail,
      },
      success:function(data){
        if(data!=0){
         $('.stuphone_msg').html('Email alerady exist'); 
         $("#signup").attr("disable",true);
        }else if(data==0){
         $("#signup").attr("disable",false);
        }
      }
   })
 })
 })
  
   
 
 
 function addstu(){
   var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var stuname = $("#stuname").val();
    var stuemail = $("#stuemail").val();
    var stuphone = $("#stuphone").val();
    var stupass = $("#stupass").val();
  
   
 if(stuname.trim() == ""){
    $('.stuname_msg').html('Please Enter Name');
    $('#stuname').focus();
    return false;
 }else if(stuemail.trim()== ""){
   $('.stuname_msg').html(' ');
    $('.stuemail_msg').html('Please Enter Email');
    $('#stuemail').focus();
    return false;
 }else if(stuphone.trim()== ""){
    $('.stuphone_msg').html('Please Enter Phone');
    $('#stuphone').focus();
    return false;
 }else if(stupass.trim()== ""){
    $('.stupass_msg').html('Please Enter Password');
    $('#stupass').focus();
    return false;
 }else{ 
    $.ajax({ 
        url:'student/addstudent.php',
        method:'POST',
        dataType:"json",
        data:{
            stusignup:"stusignup",
            stuname:stuname,
            stuemail:stuemail,
            stuphone:stuphone,
            stupass:stupass,
        },

    success:function(data){
         if(data == "Ok"){ 
          clearform();
         }else if(data=="Faild"){ 
           }
     }
   })  
}

 }


 function clearform(){
    $("#stuRegForm").trigger("reset");
    $(".stuname_msg").html(" ");
    $(".stuemail_msg").html(" ");
    $(".stuphone_msg").html(" ");
    $(".stupass_msg").html(" ");
 }
















 //login  
function checkstulogin(){
   var stuLogEmail = $("#stuelogmail").val();
   var stuLogPass = $("#stulogpass").val();
   $.ajax({ 
      url:'student/addstudent.php',
      method:'POST',
      dataType:"json",
      data:{
          stulogin:"stulogin",
          stuLogEmail:stuLogEmail,
          stuLogPass:stuLogPass,
          
      },

  success:function(data){
       if(data == "login"){
        $("#msg").html(
           'login sucess'
          
        )
        console.log("login");
        clearform();
       }else if(data=="Faild"){
          $("#msg").html(
              'faild'
          );
          console.log("Faild");
         }
   }
 })  
}





















