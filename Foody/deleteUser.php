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

      $query = "DELETE FROM user 
                WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: admin.php");
    }else {
        echo 'Error';
    }

}else {
    header("Location: admin.php");
}


?>