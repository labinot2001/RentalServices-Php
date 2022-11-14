<?php 
  define("DB_HOST", "localhost");
  define("DB_USER", "root");
  define("DB_PASSWORD", "");
  define("DB_DATABASE", "carrental");
  $db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
  if(isset($_POST['email-or-username'])){
      $EmailOrUsername= $_POST['email-or-username'];
      $message= $_POST['message'];

      $sql="INSERT INTO `contactform`(`email_or_username`, `message_text`) VALUES('$EmailOrUsername', '$message')";

      $query=mysqli_query($db,$sql);
      if($query){
        // echo ("<script LANGUAGE='JavaScript'>
        // window.alert('Succesfully Updated');
        // window.location.href='http://someplace.com';
        // </script>");
        header("location:contact.php?sent_succ");
          
         exit();
      } 
  }

?>