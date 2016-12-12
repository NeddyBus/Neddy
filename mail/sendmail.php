<?php
session_start();
if(isset($_POST['submit'])) {
   echo "<p>YEAH</p>";
   if (strcmp(md5($_POST['user_code']),$_SESSION['ckey'])) {
      header("Location: sendmail.php?msg=ERROR: Invalid Verification Code");
      exit();
   }

   $to = $_POST['toemail'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];
   $fromemail = $_POST['fromemail'];
   $fromname = $_POST['fromname'];
   $lt= '<';
   $gt= '>';
   $sp= ' ';
   $from= 'From:';
   $headers = $from.$fromname.$sp.$lt.$fromemail.$gt;
   mail($to,$subject,$message,$headers);
   header("Location: sendmail.php?msg=Mail Sent!");
   exit();
}
?>
<html>
<head>
   <title>Neddy - Email Spoofer</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../css/style.css">
   <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
   <meta name="theme-color" content="#3498DB">
</head>
<body style="background-color: #16A085;">
   <div id="content">
      <h1 id="content-heading">Email Spoofer By Neddy</h1>
      <p id="content-body">"DISCALIMER: Use at your own risk. We are not responsible for your use of the spoofer."</p>
      <div id="content-body">
         <form action="sendmail.php" method="POST">
            <p>From Name:</p><br>
            <input type="text" name="fromname" size="50"><br>
            <br><p>From Email:</p><br>
            <input type="text" name="fromemail" size="50"><br>
            <br><p>To Email:</p><br>
            <input type="text" name="toemail" size="50"><br>
            <br><p>Subject:</p><br>
            <input type="text" name="subject" size="74"><br>
            <br><p>Your Message:</p><br>
            <textarea name="message" rows="5" cols="50">
            </textarea><br>
            <br><p>Verification Code:</p><br>
            <input name="user_code" type="text" size="25">
            <img src="pngimg.php" align="middle"><br><br>
            <input type="submit" name="submit" value="Send">
            <input type="reset" value="Reset">
         </form>
      </div>
      <?php if (isset($_GET['msg'])) { echo "<font color=\"red\"><h3 align=\"center\"> $_GET[msg] </h3></font>"; } ?>
      <p>WARNING: Use it at your own risk. Do not use this for Spamming!</p>
   </div>
   </body>
   </html>
