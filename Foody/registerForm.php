<?php
    include "connect.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Module 1</title>
    <style type="text/css">
        body {
            font-family: "Lucida Console", "Courier New", monospace;
            background-color: #FCF9C6;
        }

        header {
            background-color: #C7D36F;
            text-align: center;
        }

        .header2 {
            color: blue;
            font-family: Lucida Handwriting;
            font-weight: 900;
            font-size: 50px;
        }

        .alert {
            padding: 1px;
            color: red;
            text-align: center;
        }

        .mandatory {
            color: red;
        }

        .header {
            align-items: center;
            height: 120px;
        }
        
        h1 {
            text-align: center;
            font-size: 60px;
        }

        table {
            margin: auto;
        }
            
        td {
            text-align: center;
            padding: 10px;
            width: 300px;
            margin: 10px;
        }

        th {
            text-align: center;
            padding: 10px;
            width: 150px;
        }

        select {
            width: 300px;
            margin: 10px;
        }

        option {
            text-align: center;
        }

        select {
            border-radius: 25px;
        }

        .text {
            height: auto;
            width: 300px;
            border-radius: 25px;
        }

        .btn {
            background-color: #008CBA; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 10px;
            border-radius: 8px;
        }

        .admin_add {
            margin: 1rem;
            padding: 2rem 2rem;
            text-align: center;
            align-items: center;
            margin-left: auto;
            margin-right: auto;
            border: 1px;
            border-radius: 25px;
            box-shadow: 5px 10px #888888;
            width: 700px;
            height: 650px;  
            padding: 15px;
            background: #E0DECA;
            background-clip: border-box; 
        }

    </style>
</head>
<body>
    <header>
    <img class="header" src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,f_auto,q_auto:eco,dpr_1/gwnfuhywcvf7jrordlk0" alt="Header">
    </header>

    <h1 class="header2">Register User</h1>

    <br>
    <?php if (isset($_GET['error'])) { ?>
        <div class="alert">
            Please fill in the require *
        </div>
    <?php } ?>

    <div class="admin_add">
        <form action="registerUser.php" method="post">
            <table class="center">
                <tr>
                    <th>Name</th>
                    <td><input type="text" class="text" name="name"></td>
                </tr>
                <tr>
                    <th>Username</th>
                    <td><input type="text" class="text" name="username"><label for="username" class="mandatory"> *</label></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="password" class="text" name="password"><label for="password" class="mandatory"> *</label></td>
                </tr>
                <tr>
                    <th><label for="category">Category</label></th>
                    <td>
                        <select name="category" id="category">
                            <option value="user">User</option>
                            <option value="restaurant_owner">Restaurant Owner</option>
                            <option value="rider">Rider</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Age</th>
                    <td><input type="text" class="text" name="age"></td>
                </tr>
                <tr>
                    <th><label for="gender">Gender</label></th>
                    <td>
                        <select name="gender" id="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Contact</th>
                    <td><input type="text" class="text" name="contact"></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><input type="email" class="text" name="email"></td>
                </tr>
                <tr>
                    <th><label for="location">Location</label></th>
                    <td>
                        <select name="location" id="location">
                            <option value="Gambang">Gambang</option>
                            <option value="Pekan">Pekan</option>
                            <option value="Others">Others</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><input type="text" style="height:100px; width: 300px;" name="address"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button class="btn" name="submit" onclick="return confirm('Are you sure want to Submit?')">Submit</button>
                        <a class="btn" href="admin.php" onclick="return confirm('Are you sure go back without Save?')">Back</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>