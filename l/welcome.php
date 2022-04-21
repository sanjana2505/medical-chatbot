<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">


</body>
</html>

<div class="header">
  <head > 
  <link rel="stylesheet" href="header2.css">
  <h1 style="font-family:Academy Engraved LET ;text-align:center; font-size: 50px;">Medical Chat-Bot</h1>
  <p style="font-family:Academy Engraved LET ;text-align:center; font-size: 30px;">A website making life easier.</p>
</div>

<div class="navbar">
  <head > 
    <link rel="stylesheet" href="navigation.css">
  <a href="about.html">About Us</a>
  <a href="contact.html">Contact Us</a>
  <a href="index.html">Chat-bot</a>
  <a href="logout.php" class="right">Logout</a>
  </head>
</div>

<div class="row">
  <head > 
    <link rel="stylesheet" href="content2.css">
  <div class="side"><h3><u>ADDRESS</h3></u>
  20/1- 524, Next To Applicomp India Ltd, Attibele Hobli Geddannahalli <br>
  Giddenahalli<br>
  Karnataka<br>
  Postal-Code: 562107<br>
  
  <h3><u>PHONE NUMBER</h3></u>
  080 4037 4555<br>
  080 4037 4556<br>
  </div>
  <div class="main"><h3> <u>Welcome to Medical Chatbot</h3></u>
  <ul>
<li>Here in this website you can tell your symptoms and find the disease you are suffering from.</li> 
<li>You can also book an appointment to the required hospital and doctor of your preferences.</li><br>
Health care has been made easy and more accessible to each and every person who are in need. We are striving together to make the world a better place 
to live in with a healthy environment.

</ul>
</div>
  </head>
</div>

<div class="footer">
  <head > 
    <link rel="stylesheet" href="footer.css">
     <center>PROJECT BY SANJANA AND SRUSHTI</center>
    <center>&nbsp;&nbsp;Copyright&copy;:2022</center>
    </head>
    </div>
    
</body>
</html>