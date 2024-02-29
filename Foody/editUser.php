<?php

if (isset($_GET['id'])) {
    include "connect.php";

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      $id = validate($_GET['id']);

      $sql = "SELECT * FROM user WHERE id=$id";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          $rows = mysqli_fetch_assoc($result);
      }else {
          header ("Location: admin.php");
      }

}else if (isset($_POST['update'])) {
    include "connect.php";
    if (empty($_POST['name']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['category']) || empty($_POST['age']) || empty($_POST['gender']) || empty($_POST['contact']) || empty($_POST['email']) || empty($_POST['location']) || empty($_POST['address'])) {
        echo 'Please fill in the blanks';
    }else {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $category = $_POST['category'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $location = $_POST['location'];
        $address = $_POST['address'];
        $id = $_POST['id'];

        $query = "UPDATE user 
                  SET name='$name', username='$username', password='$password', category='$category', age='$age', gender='$gender', contact='$contact', email='$email', location='$location', address='$address'
                  WHERE id=$id";
        $result = mysqli_query($conn, $query);

        if ($result) {
            header("Location: admin.php");
        }else {
            echo 'Error';
        }
    }
}else {
    header ("Location: admin.php");
}