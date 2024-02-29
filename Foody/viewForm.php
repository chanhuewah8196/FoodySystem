<?php
include 'viewUser.php';
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
            border-collapse: collapse;
        }
            
        td {
            text-align: center;
            padding: 10px;
            width: 300px;
            margin: 10px;
            text-align: left;
        }

        th {
            border-right: 2px solid black;
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

        .text {
            height: auto;
            width: 300px;
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

        .button {
            text-align: center;
        }

        .admin_view {
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
            height: 450px;  
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
        <a href="admin.php">Home</a>
        <a class="active" href="admin.php">Manage User</a>
        <a href="report.php">Report</a>
        <a class="passive" href="logout.php">Logout</a>
    </div>
    <br>

    <h1 class="header2">View User</h1>

    <br>

    <div class="admin_view">
        <form action="viewUser.php" method="post">
            <table class="center">
                <tr>
                    <th>ID</th>
                    <td><?php echo $rows["id"]; ?></td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td><?php echo strtoupper($rows["name"]); ?></td>
                </tr>
                <tr>
                    <th>Username</th>
                    <td><?php echo $rows["username"]; ?></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><?php echo $rows["password"]; ?></td>
                </tr>
                <tr>
                    <th><label for="category">Category</label></th>
                    <td><?php echo strtoupper($rows["category"]); ?></td>
                </tr>
                <tr>
                    <th>Age</th>
                    <td><?php echo $rows["age"]; ?></td>
                </tr>
                <tr>
                    <th><label for="gender">Gender</label></th>
                    <td><?php echo strtoupper($rows["gender"]); ?></td>
                </tr>
                <tr>
                    <th>Contact</th>
                    <td><?php echo $rows["contact"]; ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo $rows["email"]; ?></td>
                </tr>
                <tr>
                    <th><label for="location">Location</label></th>
                    <td><?php echo strtoupper($rows["location"]); ?></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><?php echo strtoupper($rows["address"]); ?></td>
                </tr>
                <tr>
                    <td colspan="2" class="button">
                        <a class="btn" href="admin.php">Back</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>