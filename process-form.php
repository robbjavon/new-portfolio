<?php
//varible setting
 $name= $_REQUEST['fullname'];
 $email = $_REQUEST['email'];
 $message = $_REQUEST['message'];
 $subject = "Message from Contact Form!";

 $to ="robbbozeman@gmail.com";  // change receiving email id 
 
 $content = "Name : ". $fullname. "\r\nContact email : ". $email. "\r\n \r\nMessage : \r\n \r\n".$message ; // name [break] email [break] message
 


// check input fields
if ( empty($fullname)|| empty($email)|| empty($message))
{
echo"<script type='text/javascript'>alert('Please fill all correct');
    window.history.go(-1);
    </script>";
}
else 
{ mail($to,$subject,$content);

    echo"<script type='text/javascript'>alert('Your message sent succesfully ');
    window.history.go(-1);
    </script>";
}


?>