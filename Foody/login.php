<?php
session_start();
include "connect.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['category'])) {

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      $username = test_input($_POST['username']);
      $password = test_input($_POST['password']);
      $category = test_input($_POST['category']);

      if (empty($username)) {
          header("Location: index.php?error=Username is Required");
      }else if (empty($password)) {
          header("Location: index.php?error=Password is Required");
      }else {

          //Hashing the password
          //$password = md5($password);

          $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) === 1) {
              //the username must be unique
              $row = mysqli_fetch_assoc($result);
              if ($row['password'] === $password && $row['category'] === $category) {
                  $_SESSION['name'] = $row['name'];
                  $_SESSION['id'] = $row['id'];
                  $_SESSION['category'] = $row['category'];
                  $_SESSION['username'] = $row['username'];

                  header("Location: page.php");
              }else {
                header("Location: index.php?error=Incorrect Username or Password");
              }
          }else {
            header("Location: index.php?error=Incorrect Username or Password");
          }


      }

}else {
    header("Location: index.php");
}