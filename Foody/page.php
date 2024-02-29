<?php
    session_start();
    include "connect.php";
    if(isset($_SESSION['username']) && isset($_SESSION['id'])) 
        {    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
        <?php if ($_SESSION['category'] == 'admin') { header("Location: M1home.php"); ?>
            <!-- Admin Page -->
            
        <?php }else if ($_SESSION['category'] == 'user') { header("Location: genUser.php"); ?>
            <!-- For User -->
            <?php }else if ($_SESSION['category'] == 'restaurant_owner') { header("Location: restOwner.php"); ?>
                <!-- For Restaurant Owner -->
                <?php }else if ($_SESSION['category'] == 'rider') { header("Location: rider.php"); ?>
                    <!-- For Rider -->
                    
            <div class="card" style="width: 18rem;">
                <img src="https://www.kindpng.com/picc/m/699-6997452_administrator-network-icons-system-avatar-computer-transparent-admin.png" class="card-img-top" alt="admin image">
                <div class="card-body text-center">
                    <h5 class="card-title"><?=$_SESSION['name']?></h5>
                    <a href="logout.php" class="btn btn-dark">Logout</a>
                    
                </div>
            </div>
        <?php } ?>
    </div>
</body>
</html>
<?php }else {
    header("Location: index.php");
} ?>