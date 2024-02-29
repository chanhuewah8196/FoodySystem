<?php
    session_start();
    include "connect.php";
    if(isset($_SESSION['username']) && isset($_SESSION['id'])) 
        {    ?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="600; url=session.php">
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

        .header {
            align-items: center;
            height: 120px;
        }

        .header1 {
            color: blue;
            font-family: Lucida Handwriting;
            font-weight: 900;
            font-size: 30px;
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

        .adminLogo {
            width: 100px;
            height: 100px;
        }

        .card {
            text-align: center;

        }

        .card1 {
            line-height: 0.7;
        }

        .header2 {
            font-size: 40px;
        }

        .header3 {
            font-size: 20px;
        }

        .btn {
            border-radius: 8px;
            background-color: #008CBA; /* Green */
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 11px;
            padding: 15px 32px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
            float: center;
            display: inline-block;
            text-decoration: none;
        }

        .btn span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .btn span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
         }

        .btn:hover span {
            padding-right: 25px;
        }

        .btn:hover span:after {
            opacity: 1;
            right: 0;
        }

        table {
            border-collapse: collapse;
            padding: 5px;
            margin-left: auto;
            margin-right: auto;
        }

        tr {
            padding: 5px;
            margin-left: auto;
            margin-right: auto;
        }

        th {
            border-right: 2px solid black;
            padding: 5px;
            margin-left: auto;
            margin-right: auto;
            text-align: right;
        }

        td {
            padding: 5px;
            margin-left: auto;
            margin-right: auto;
            text-align: left;
        }

        * {
            box-sizing: border-box;
        }

        .searchC {
            margin-left: 35%;
            align-items: center;
            justify-content: center;
        }

        #myInput {
            background-image: url('/css/searchicon.png');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 50%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #myTable {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
            font-size: 18px;
        }

        #myTable th, #myTable td {
            text-align: left;
            padding: 12px;
        }

        #myTable tr {
            border-bottom: 1px solid #ddd;
        }

        #myTable tr.header, #myTable tr:hover {
            background-color: #f1f1f1;
        }

        .admin_home {
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
            height: 400px;  
            padding: 15px;
            background: #E0DECA;
            background-clip: border-box; 
        }

        .admin_home_child {
            display: inline-block;
            padding: 1rem 1rem;
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <header>
        <img class="header" src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,f_auto,q_auto:eco,dpr_1/gwnfuhywcvf7jrordlk0" alt="Header">
        <div class="topnav">
            <a href="M1home.php">Home</a>
            <a href="admin.php">Manage User</a>
            <a href="report.php">Report</a>
            <a class="passive" href="logout.php">Logout</a>
        </div>
    </header>
    <br>

    <div class="admin_home">
        <div class="admin_home_child">
            <img src="https://www.seekpng.com/png/full/367-3670105_admin-login-logo-png.png">
        </div>
        <div class="admin_home_child">
            <h1 class="header1">ADMIN INFO</h1>
            <table>
                <tr>
                    <th>Admin ID:</th>
                    <td><?=$_SESSION['id']?></td>
                </tr>
                <tr>
                    <th>Admin Name:</th>
                    <td><?=$_SESSION['name']?></td>
                </tr>
                <tr>
                    <th>Admin Username:</th>
                    <td><?=$_SESSION['username']?></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a href="admin.php" class="btn"><span>Manage User</span></a>
                        <a href="report.php" class="btn"><span>Report</span></a>
                    </td>
                </tr>

            </table>

        </div>
    </div>

</body>
</html>
<?php }else {
    header("Location: index.php");
} ?>