<?php
include 'editUser.php';
?>


<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
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
        
        .topnav {
            overflow: hidden;
            background-color: rgb(0, 0, 0);
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: #1c02c2;
        }


        .topnav a.passive {
            color: white;
            text-align: right;
            float: right;
            margin-right: auto;
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
            border-radius: 25px;
            width: 300px;
            margin: 10px;
        }

        option {
            text-align: center;
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

        .admin_edit {
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
            height: 700px;  
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

    <div class="topnav">
        <a href="admin.php" onclick="return confirm('Are you sure go Home without Save?')">Home</a>
        <a class="active" href="admin.php" onclick="return confirm('Are you sure go Manage User without Save?')">Manage User</a>
        <a href="report.php" onclick="return confirm('Are you sure go to Report without Save?')">Report</a>
        <a class="passive" href="logout.php" onclick="return confirm('Are you sure Logout without Save?')">Logout</a>
    </div>
    <br>

    <h1 class="header2">Update User</h1>
    <br>
    <?php if (isset($_GET['error'])) { ?>
        <div class="alert">
            Please fill in the require *
        </div>
    <?php } ?>

    <div class="admin_edit">
        <form action="editUser.php" method="post">
            <table class="center">
                <tr>
                    <th>ID</th>
                    <td><input type="text" class="text" style="text-align: center" name="id" value="<?=$rows['id'] ?>"></td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td><input type="text" class="text" name="name" value="<?=$rows['name'] ?>"></td>
                </tr>
                <tr>
                    <th>Username</th>
                    <td><input type="text" class="text" name="username" value="<?=$rows['username'] ?>"><label for="username" class="mandatory"> *</td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="password" class="text" name="password" value="<?=$rows['password'] ?>"><label for="password" class="mandatory"> *</td>
                </tr>
                <tr>
                    <th><label for="category">Category</label></th>
                    <td>
                        <select name="category" id="category">
                            <option value="user">User</option>
                            <option value="restaurant_owner">Restaurant Owner</option>
                            <option value="rider">Rider</option>
                            <option value="admin">Admin</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Age</th>
                    <td><input type="text" class="text" name="age" value="<?=$rows['age'] ?>"></td>
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
                    <td><input type="text" class="text" name="contact" value="<?=$rows['contact'] ?>"></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><input type="email" class="text" name="email" value="<?=$rows['email'] ?>"></td>
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
                    <td><input type="text" style="height:100px; width: 300px;" name="address" value="<?=$rows['address'] ?>"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button class="btn" name="update" onclick="return confirm('Are you sure want to Save this Update?')"> Update</button>
                        <a class="btn" href="admin.php" onclick="return confirm('Are you sure go back without Save this Update?')">Back</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>