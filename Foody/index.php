<?php
    session_start();
    if(!isset($_SESSION['username']) && !isset($_SESSION['id'])) 
    { ?>

<!DOCTYPE html>
<html>
<head>
    <title>Foody</title>
    <style>
    body {
        font-family: "Lucida Console", "Courier New", monospace;
        background-color: #FCF9C6;
        align-items: center;
    }

    .login_header {
        margin: 1rem;
        padding: 2rem 2rem;
        align-items: center;
        margin-left: auto;
        margin-right: auto;
        border: 1px;
        border-radius: 25px;
        box-shadow: 5px 10px #888888;
        width: 500px;
        height: 350px;  
        padding: 15px;
        background: #E0DECA;
        background-clip: border-box; 
    }

    .login_header1 {
        text-align: center;
    }

    .login_table {
        align-items: center;
    }

    table {
        margin-left: auto;
        margin-right: auto;
        
    }

    th {
        padding: 10px;
        text-align: right;
    }

    td {
        padding: 10px;
        text-align: left;
    }

    .text {
        height: auto;
        width: 200px;
        border-radius: 25px;
    }

    select {
        border-radius: 25px;
        height: auto;
        width: 200px;
    }

    button {
        height: auto;
        width: auto;
    }

    a {
        height: auto;
        width: auto;
    }

    .header2 {
        color: blue;
        font-family: Lucida Handwriting;
        font-weight: 900;
        font-size: 50px;
    }

    .adminLogo {
        width: 300px;
        height: 100px;
        border-radius: 25px;
        background-color: #C7D36F;
    }

    .card {
        text-align: center;
        border: 1px solid black;
        border-radius: 25px;
        margin-left: auto;
        margin-right: auto;
        width: 500px;
        background: #C7D36F;
        background-clip: border-box; 
        box-shadow: 5px 10px #888888;
    }

    .forgot_password {
        text-align: right;
    }

    .btn2 {
        padding: 10px 30px;
        font-size: 10px;
        text-align: center;
        cursor: pointer;
        outline: none;
        color: #fff;
        background-color: #6495ED;
        border: none;
        border-radius: 15px;
        box-shadow: 0 2px #999;
        text-decoration: none;
    }

    .btn2:hover {
        background-color: #00FFFF;
        color: black;
    }

    .btn2:active {
        background-color: #3e8e41;
        box-shadow: 0 2px #666;
        transform: translateY(1px);
    }

    </style>
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <div class="card">
        <img class="adminLogo" src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,f_auto,q_auto:eco,dpr_1/gwnfuhywcvf7jrordlk0">
    </div>
    
    <div class="login_header">
        <div class="login_header1">
            <form style="width: 450px;" action="login.php" method="post">
                <h1 class="header2">LOGIN</h1>
                <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?=$_GET['error']?>
                </div>
                <?php } ?>
                <div class="login_table">
                    <table>
                        <tr>
                            <th>Username:</th>
                            <td><input type="text" class="text" name="username" id="username" aria-describedby="emailHelp"></td>
                        </tr>
                        <tr>
                            <th>Password:</th>
                            <td><input type="password" class="text" name="password" id="password" aria-describedby="emailHelp"></td>
                        </tr>
                        <tr>
                            <th>Select Category:</th>
                            <td>
                                <select class="form-select mb-3" aria-label="Default select example" name="category">
                                    <option selected value="user">User</option>
                                    <option value="restaurant_owner">Restaurant Owner</option>
                                    <option value="rider">Rider</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <button type="submit" class="btn2">Login</button>
                            </th>
                            <td>
                                <a class="btn2" href="registerForm.php">Register</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>

        <div class="forgot_password">
            <a href="#" onclick="window.alert('Please contact 016-4963194 [Admin]');">Forgot Password?</a>
        </div>
    </div>
</body>
</html>
<?php }else {
    header("Location: index.php");
} ?>