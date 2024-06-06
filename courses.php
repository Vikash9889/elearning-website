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
   <title>courses</title>

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
         <img src='images/logo.svg' class='image-logo'>
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


<section class="courses">

   <!-- <h1 class="heading">our courses</h1> -->
   <div class="teachers">
      <form action="" method="post" class="search-tutor">
         <input type="text" name="search_box" placeholder="Search courses..." required maxlength="100">
         <button type="submit" class="fas fa-search" name="search_tutor"></button>
      </form>
   </div>

   <div class="box-container">

   <?php
         if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
         {
            echo"
               <div class='box'>
                  <div class='tutor'>
                     <img src='images/pic-1.jpg' alt='teacher-image'>
                     <div class='info'>
                        <h3> James Alexander</h3>
                        <span>21-11-2023</span>
                     </div>
                  </div>
                  <div class='thumb'>
                     <img src='images/thumb-1.png' alt='course-thumbel'>
                     <span>38 videos</span>
                  </div>
                  <h3 class='title'>Complete HTML Tutorial</h3>
                  <a href='playlist.php' class='inline-btn'>view playlist</a>
               </div>

               <div class='box'>
                  <div class='tutor'>
                     <img src='images/pic-1.jpg' alt='teacher-image'>
                     <div class='info'>
                        <h3>Elizabeth Grace</h3>
                        <span>25-11-2023</span>
                     </div>
                  </div>
                  <div class='thumb'>
                     <img src='images/thumb-2.png' alt='course-thumbel'>
                     <span>45 videos</span>
                  </div>
                  <h3 class='title'>Complete CSS Tutorial</h3>
                  <a href='playlist.php' class='inline-btn'>view playlist</a>
               </div>

               <div class='box'>
                  <div class='tutor'>
                     <img src='images/pic-1.jpg' alt='teacher-image'>
                     <div class='info'>
                        <h3>William Harrison</h3>
                        <span>27-11-2023</span>
                     </div>
                  </div>
                  <div class='thumb'>
                     <img src='images/thumb-3.png' alt='course-thumbel'>
                     <span>72 videos</span>
                  </div>
                  <h3 class='title'>Complete JavaScript Tutorial</h3>
                  <a href='playlist.php' class='inline-btn'>view playlist</a>
               </div>

               <div class='box'>
                  <div class='tutor'>
                     <img src='images/pic-1.jpg' alt='teacher-image'>
                     <div class='info'>
                        <h3>Emily Charlotte</h3>
                        <span>30-11-2023</span>
                     </div>
                  </div>
                  <div class='thumb'>
                     <img src='images/thumb-4.png' alt='course-thumbel'>
                     <span>27 videos</span>
                  </div>
                  <h3 class='title'>Complete Bootstrap Tutorial</h3>
                  <a href='playlist.php' class='inline-btn'>view playlist</a>
               </div>

               <div class='box'>
                  <div class='tutor'>
                     <img src='images/pic-1.jpg' alt='teacher-image'>
                     <div class='info'>
                        <h3>Benjamin Thomas</h3>
                        <span>03-12-2023</span>
                     </div>
                  </div>
                  <div class='thumb'>
                     <img src='images/thumb-8.png' alt='course-thumbel'>
                     <span>54 videos</span>
                  </div>
                  <h3 class='title'>Complete MySQL Tutorial</h3>
                  <a href='playlist.php' class='inline-btn'>view playlist</a>
               </div>

               <div class='box'>
                  <div class='tutor'>
                     <img src='images/pic-1.jpg' alt='teacher-image'>
                     <div class='info'>
                        <h3>Victoria Rose</h3>
                        <span>06-12-2023</span>
                     </div>
                  </div>
                  <div class='thumb'>
                     <img src='images/thumb-7.png' alt='course-thumbel'>
                     <span>35 videos</span>
                  </div>
                  <h3 class='title'>Complete PHP Tutorial</h3>
                  <a href='playlist.php' class='inline-btn'>view playlist</a>
               </div>
      
            ";
         }
         else
         {
            echo"
                    <div class='box'>
                  <div class='tutor'>
                     <img src='images/pic-1.jpg' alt='teacher-image'>
                     <div class='info'>
                        <h3> James Alexander</h3>
                        <span>21-11-2023</span>
                     </div>
                  </div>
                  <div class='thumb'>
                     <img src='images/thumb-1.png' alt='course-thumbel'>
                     <span>38 videos</span>
                  </div>
                  <h3 class='title'>Complete HTML Tutorial</h3>
                  <a href='playlist.php' class='inline-btn'>view playlist</a>
               </div>

               <div class='box'>
                  <div class='tutor'>
                     <img src='images/pic-1.jpg' alt='teacher-image'>
                     <div class='info'>
                        <h3>Elizabeth Grace</h3>
                        <span>25-11-2023</span>
                     </div>
                  </div>
                  <div class='thumb'>
                     <img src='images/thumb-2.png' alt='course-thumbel'>
                     <span>45 videos</span>
                  </div>
                  <h3 class='title'>Complete CSS Tutorial</h3>
                  <a href='playlist.php' class='inline-btn'>view playlist</a>
               </div>

               <div class='box'>
                  <div class='tutor'>
                     <img src='images/pic-1.jpg' alt='teacher-image'>
                     <div class='info'>
                        <h3>William Harrison</h3>
                        <span>27-11-2023</span>
                     </div>
                  </div>
                  <div class='thumb'>
                     <img src='images/thumb-3.png' alt='course-thumbel'>
                     <span>72 videos</span>
                  </div>
                  <h3 class='title'>Complete JavaScript Tutorial</h3>
                  <a href='playlist.php' class='inline-btn'>view playlist</a>
               </div>

               <div class='box'>
                  <div class='tutor'>
                     <img src='images/pic-1.jpg' alt='teacher-image'>
                     <div class='info'>
                        <h3>Emily Charlotte</h3>
                        <span>30-11-2023</span>
                     </div>
                  </div>
                  <div class='thumb'>
                     <img src='images/thumb-4.png' alt='course-thumbel'>
                     <span>27 videos</span>
                  </div>
                  <h3 class='title'>Complete Bootstrap Tutorial</h3>
                  <a href='playlist.php' class='inline-btn'>view playlist</a>
               </div>

               <div class='box'>
                  <div class='tutor'>
                     <img src='images/pic-1.jpg' alt='teacher-image'>
                     <div class='info'>
                        <h3>Benjamin Thomas</h3>
                        <span>03-12-2023</span>
                     </div>
                  </div>
                  <div class='thumb'>
                     <img src='images/thumb-8.png' alt='course-thumbel'>
                     <span>54 videos</span>
                  </div>
                  <h3 class='title'>Complete MySQL Tutorial</h3>
                  <a href='playlist.php' class='inline-btn'>view playlist</a>
               </div>

               <div class='box'>
                  <div class='tutor'>
                     <img src='images/pic-1.jpg' alt='teacher-image'>
                     <div class='info'>
                        <h3>Victoria Rose</h3>
                        <span>06-12-2023</span>
                     </div>
                  </div>
                  <div class='thumb'>
                     <img src='images/thumb-7.png' alt='course-thumbel'>
                     <span>35 videos</span>
                  </div>
                  <h3 class='title'>Complete PHP Tutorial</h3>
                  <a href='playlist.php' class='inline-btn'>view playlist</a>
               </div>
      
            ";
         }
      ?>

   </div>

   <div class="more-btn">
      <a href="courses.php" class="inline-option-btn">view all courses</a>
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