<!DOCTYPE html>
<html lang="en">
<head>
   <title>Neddy</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="./css/style.css">
   <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
   <meta name="theme-color" content="#3498DB">

   <script>
     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
     })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

     ga('create', 'UA-63110617-3', 'auto');
     ga('send', 'pageview');
  </script>
</head>

<body>
   <!-- Menu -->
   <div id="menu">
      <a href="index.php">Home</a>
      <a href="about.html">About</a>
      <a href="shout.html">Shout</a>
   </div>

   <!-- Navigation Bar -->
   <div id="navbar">
      <a href="index.php" id="navbar-logo">Neddy</a>
      <div id="navbar-button" onclick="toggleMenu()">
         <span id="navbar-button-a"></span>
         <span id="navbar-button-b"></span>
         <span id="navbar-button-c"></span>
      </div>
   </div>

   <!-- Content -->
   <div id="content">
      <h1 id="content-heading">neddy. xyz</h1>
      <p id="content-body">The most pointless part of the internet.</p>

      <form method="get">
         <input type="text" name="input" placeholder="Enter code" id="content-input">
         <input type="submit" value="Enter" id="content-submit">

         <?php
            if (isset($_GET['input'])) {
               $input =  $_GET['input'];
               if ($input == "0121") {
                  header("Location: 0121.html");
               } else if ($input == "Rustam" || $input == "rustam") {
                  header("Location: rustam.html");
               } else if ($input == "Speny" || $input == "speny") {
                  header("Location: https://www.youtube.com/channel/UCnzdP2XFMygUr19RUmAprrw");
               } else if ($input == "Mangham" || $input == "mangham") {
                  header("Location: mangham.html");
               } else if ($input == "Alpe" || $input == "alpe") {
                  header("Location: alpe.html");
               } else if ($input == "Classic" || $input == "classic") {
                  header("Location: ./classic/index.html");
               } else if ($input == "Lom" || $input == "lom") {
                  header("Location: lom.html");
               } else if ($input == "Trump" || $input == "trump") {
                  header("Location: http://www.trumpdonald.org");
               } else if ($input == "Bajwah" || $input == "bajwah") {
                  header("Location: bajwah.html");
               } else if ($input == "Fire" || $input == "fire") {
                  header("Location: https://www.youtube.com/watch?v=h2qfjwoy5M4&ab_channel=RobBuckley");
               } else if ($input == "Lucia" || $input == "lucia") {
                  header("Location: lucia.html");
               } else if ($input == "Starwars" || $input == "starwars") {
                  header("Location: starwars.html");
               } else if ($input == "Mail" || $input == "mail") {
                  header("Location: ./mail/sendmail.php");
               } else if ($input == "Fhes" || $input == "fhes") {
                  header("Location: fhes.html");
               } else if ($input == "Langhams" || $input == "langhams") {
                  header("Location: langhams.html");
               } else if ($input == "Hamy" || $input == "hamy") {
                  header("Location: hamy.html");
               } else if ($input == "Monopoly" || $input == "monopoly") {
                  header("Location: https://www.youtube.com/watch?v=7zEcSlj0RXM");
               } else if ($input == "Josh" || $input == "josh") {
                  header("Location: josh.html");
               }
            }
          ?>
      </form>
   </div>

   <!-- Javascript -->
   <script>
      menuVisible = false;

      function toggleMenu() {
         if (!menuVisible) {
            document.body.style.overflow = "hidden";
            document.getElementById("menu").style.visibility = "visible";
            document.getElementById("menu").style.opacity = "1";
            document.getElementById("navbar-button").id += "-active";
            menuVisible = true;
         } else {
            document.body.style.overflow = "visible";
            document.getElementById("menu").style.visibility = "hidden";
            document.getElementById("menu").style.opacity = "0";
            document.getElementById("navbar-button-active").id = "navbar-button";
            menuVisible = false;
         }
      }
   </script>
</body>
</html>
