<?php

require('connection.php');
session_start();

// for login functionality

if(isset($_POST['login'])){

    $query = "SELECT * FROM `registered_users` WHERE `email`='$_POST[email_username]' OR `user_name`='$_POST[email_username]'";
    $result = mysqli_query($connection, $query);
    if($result)
    {
        if (mysqli_num_rows($result)==1)
        {
           $result_fetch=mysqli_fetch_assoc($result);
           if(password_verify($_POST['password'],$result_fetch['password']))
           {
            // if password matched
             $_SESSION['logged_in']=true;
             $_SESSION['username']=$result_fetch['user_name'];
             $_SESSION['course_id']=$result_fetch['course-id'];
             header("location: index.php");
           }
           else
           {
            // password not match
            echo"
            <script>
                alert(' incorect password');
                window.location.href='index.php';
            </script>
            ";

           }
        }
        else
        {
            echo"
            <script>
                alert(' email or user name not registered');
                window.location.href='index.php';
            </script>
        ";
        }
    }
    else
    {
        echo"
        <script>
            alert(' query not run');
            window.location.href='index.php';
        </script>
    "; 
    }

}





// its for registration 

if(isset($_POST['registor'])){
// Assuming you have a database connection established

// SQL query to check user existence
$query = "SELECT * FROM `registered_users` WHERE `user_name`='$_POST[username]' OR `email`='$_POST[email]'";

// Execute the query
$result = mysqli_query($connection, $query);

// Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
    // User exists
    $result_fetch=mysqli_fetch_assoc($result);
    if($result_fetch['username']==$_POST['username'])
    {
        echo"
        <script>
            alert(' $result_fetch[username] - user name allready exist');
            window.location.href='index.php';
        </script>
        ";
    }
    else
    {
        // when email is allready register
        echo"
        <script>
            alert(' $result_fetch[email] - email allready exist');
            window.location.href='index.php';
        </script>
    ";
    }
} else {
    // User does not exist
    $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
    $query="INSERT INTO `registered_users`(`full_name`, `user_name`, `email`, `password`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$password')";
    if(mysqli_query($connection, $query))
    {
     //   if data insert in to database
     echo"
     <script>
         alert('Registration successfull');
         window.location.href='index.php';
     </script>

      ";
    }
    else
    {
     // if data can nat insert in to database
      echo"
      <script>
         alert('can not run query');
          window.location.href='index.php';
      </script>
       ";
    }
}


}


?>