<?php

try{

    $db = new mysqli("localhost", "root" , "" ,  "job");

}catch (Exception $exc){
    echo $exc->getTraceAsString();

}

if (isset($_POST['name']) && isset($_POST['phone'])  && isset($_POST['email']) && isset($_POST['title']) && isset($_POST['skills']) && isset($_POST['descc'])   ) 
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $skills = $_POST['skills'];
    $descc = $_POST['descc'];
    
    $is_insert = $db->query("INSERT INTO `data`(`id`, `name`, `phone`, `email`, `title`, `skills`, `descc`) VALUES (' $name','$phone ','$email',' $title','$skills',' $descc')");
    if($is_insert == TRUE){
        echo "<h2>Thanks<h2>";
        exit();
    
    }

}



?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Code Karo Yaroo </title>
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="#" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Phone No</span>
            <input type="text" name="phone" placeholder="Enter your phone number" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text"  name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Job Title</span>
            <input type="text" name="title" placeholder="Enter job title" required>
          </div>
          <div class="input-box">
            <span class="details">Key-skills</span>
            <input type="text" name="skills" placeholder="Enter your key-skills" required>
          </div>
          <div class="input-box">
            <span class="details">Job Description</span>
            <input type="text" name="descc" placeholder="Enter Job Description" required>
          </div>
        </div>
        
        <div class="button">
          <input type="submit" name="save_contact" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>