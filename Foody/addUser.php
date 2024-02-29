<?php

    require_once("connect.php");

    if (isset($_POST['submit'])) {

        if (empty($_POST['name']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['category']) || empty($_POST['age']) || empty($_POST['gender']) || empty($_POST['contact']) || empty($_POST['email']) || empty($_POST['location']) || empty($_POST['address'])) {
            header("Location: addForm.php?error=Please fill in the require * blanks.");
            //echo 'Please fill in the blanks';
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

            $query = " INSERT INTO user (name, username, password, category, age, gender, contact, email, location, address) values('$name','$username','$password','$category','$age','$gender','$contact','$email','$location','$address')";
            $result = mysqli_query($conn, $query);

            if ($result) {
                header("Location: admin.php");
            }else {
                echo 'Please Check Your Query';
            }
        }


    }else {
        header ("Location: addForm.php");
    }

?>