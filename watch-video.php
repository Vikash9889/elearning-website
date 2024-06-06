<?php
 require('connection.php');
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>watch</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/footer-style.css">
   <link rel="stylesheet" href="css/stylesheet.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

   <a href="index.php" class="logo"><img src="images/logo.svg"  alt="EduWeb logo"></a>


      <form action="search.php" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <!-- <img src="images/pic-1.jpg" class="image" alt="">
         <h3 class="name">Abhishek Yadav</h3>
         <p class="role">studen</p>
         <a href="profile.php" class="btn">view profile</a> -->
         
         <!-- <div class="flex-btn">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div> -->

         <?php
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
            {
               echo"
                  <img src='images/pic-1.jpg' class='image'>
                  <h3 class='name'>$_SESSION[username]</h3>
                  <p class='role'>student</p>
                  <a href='profile.php' class='btn'>view profile</a>
                  <div class='flex-btn'>
                     <a href='logout.php' class='option-btn'>logout</a>
                  </div>
      
               ";
            }
            else
            {
               echo"
                  <div class='flex-btn'>
                     <a href='login.php' class='option-btn'>login</a>
                     <a href='register.php' class='option-btn'>register</a>
                  </div>
      
               ";
            }
         ?>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>
   
   <?php
   if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
   {
      echo"

      <div class='profile'>
      <img src='images/pic-1.jpg' class='image'>
      <h3 class='name'>$_SESSION[username]</h3>
      <p class='role'>student</p>
      <div class='flex-btn'>
         <a href='logout.php' class='option-btn'>logout</a>
      </div>
      </div>
      
      ";
   }
   else
   {
      echo"
      <div class='profile'>
         <img src='images/logo3.jpg' class='image-logo'>
      </div>
      
      ";
   }
   ?>

   <nav class="navbar">
      <a href="index.php"><i class="fas fa-home"></i><span>home</span></a>
      <?php
         if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
         {
            echo"
               <a href='video_chat.php'><i class='fa-solid fa-video' style='color: #8e44ad;'></i><span>video chat</span></a>
            ";
         }
         else
         {
            echo"
               <a href='about.php'><i class='fas fa-question'></i><span>about</span></a>
            ";
         }
      ?>
      <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
      <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
      <a href="contact.php"><i class="fas fa-headset"></i><span>contact us</span></a>
   </nav>

</div>

<section class="watch-video">

   <div class="video-container">
      <div class="video">
         <video src="images/vid-1.mp4" controls poster="images/post-1-1.png" id="video"></video>
      </div>
      <h3 class="title">Complete HTML Tutorial (part 01)</h3>
      <div class="info">
         <p class="date"><i class="fas fa-calendar"></i><span>22-11-2023</span></p>
         <p class="date"><i class="fas fa-heart"></i><span>44 likes</span></p>
      </div>
      <div class="tutor">
         <img src="images/pic-1.jpg" alt="">
         <div>
            <h3>James Alexander</h3>
            <span>Developer</span>
         </div>
      </div>
      <form action="" method="post" class="flex">
         <a href="playlist.php" class="inline-btn">view playlist</a>
         <button><i class="far fa-heart"></i><span>like</span></button>
      </form>
      <p class="description">
      HTML, or Hypertext Markup Language, is the standard language used to create and design web pages. It provides the basic structure of a webpage by using tags to define different elements like headings, paragraphs, links, and images. It's the backbone of the web, allowing content to be displayed and formatted on browsers across various devices.

      </p>
   </div>

</section>

<section class="comments">

   <h1 class="heading">5 comments</h1>

   <form action="" class="add-comment">
      <h3>Add comments</h3>
      <textarea name="comment_box" placeholder="Enter your comment" required maxlength="1000" cols="30" rows="10"></textarea>
      <input type="submit" value="add comment" class="inline-btn" name="add_comment">
   </form>

   <h1 class="heading">user comments</h1>

   <div class="box-container">

      <div class="box">
         <div class="user">
            <img src="images/pic-1.jpg" alt="">
            <div>
               <h3>Abhi Yadav</h3>
               <span>22-11-2023</span>
            </div>
         </div>
         <div class="comment-box">this is a comment form shaikh anas</div>
         <form action="" class="flex-btn">
            <input type="submit" value="edit comment" name="edit_comment" class="inline-option-btn">
            <input type="submit" value="delete comment" name="delete_comment" class="inline-delete-btn">
         </form>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-1.jpg" alt="">
            <div>
               <h3>Aman Yadav</h3>
               <span>22-10-2022</span>
            </div>
         </div>
         <div class="comment-box">awesome tutorial!
            keep going!</div>
      </div>



      </div>

   </div>

</section>















<!-- footer section start -->
<footer class="footer-main">
   <div class="footer-container">
    <div class="row">
      <div class="footer-col">
        <h4>company</h4>
        <ul>
          <li><a href="#">about us</a></li>
          <li><a href="#">our services</a></li>
          <li><a href="#">privacy policy</a></li>
          <li><a href="#">affiliate program</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>get help</h4>
        <ul>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Buy</a></li>
          <li><a href="#">payment options</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Courses</h4>
        <ul>
          <li><a href="#">Web Development</a></li>
          <li><a href="#">Python</a></li>
          <li><a href="#">Java</a></li>
          <li><a href="#">C++</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>follow us</h4>
        <div class="social-links">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
   </div>
 </footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>