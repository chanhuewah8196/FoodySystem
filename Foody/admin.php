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
            border-radius: 25px;
        }

        .card {
            text-align: center;

        }

        .card1 {
            line-height: 0.7;
        }

        .header2 {
            color: blue;
            font-family: Lucida Handwriting;
            font-weight: 900;
            font-size: 50px;
        }

        .header3 {
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 900;
            font-size: 20px;
        }

        .btn {
            border-radius: 8px;
            background-color: #008CBA; /* Green */
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 15px;
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

        table  {
            border-collapse: collapse;
            padding: 15px;
            margin-left: auto;
            margin-right: auto;
        }

        tr {
            border: 1px solid;
            padding: 15px;
            margin-left: auto;
            margin-right: auto;
        }

        th {
            border: 1px solid black;
            padding: 15px;
            margin-left: auto;
            margin-right: auto;
            background-color: #7FFFD4;
            color: black;
        }

        td {
            border: 1px solid black;
            padding:15px;
            margin-left: auto;
            margin-right: auto;
            background-color: #F0FFFF;
            color: black;
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
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 50%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid black;
            margin-bottom: 12px;
            background-color: #F5F5DC;
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
    </style>
</head>
<body>
    <header>
        <img class="header" src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,f_auto,q_auto:eco,dpr_1/gwnfuhywcvf7jrordlk0" alt="Header">
    </header>

    <div class="topnav">
        <a href="M1home.php">Home</a>
        <a class="active" href="admin.php">Manage User</a>
        <a href="report.php">Report</a>
        <a class="passive" href="logout.php">Logout</a>
    </div>
    <br>

    <div class="card">
        
        <div class="card1">
            <img class="adminLogo" src="https://thumbs.dreamstime.com/b/admin-icon-trendy-design-style-isolated-white-background-vector-simple-modern-flat-symbol-web-site-mobile-logo-app-135742404.jpg">
            <h1 class="header2">User List</h1>
            <h3 class="header3">Total User: 
            <?php 
					$query = "SELECT COUNT(username) as totalUser FROM user";
					$res = mysqli_query($conn, $query);
					$total = mysqli_fetch_assoc($res);
					echo $total['totalUser'];
				?>
            </h3>
            
            <a href="addForm.php" class="btn"><span>Add User</span></a>
        </div>
    </div>
    <br>
    <div>
        <?php include 'user.php';
            if (mysqli_num_rows($res) > 0) {?>
            
        <div class="searchC">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" size="50">
        </div>
        <br>
        <table>
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Category</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody id="myTable">
                <?php
                $i =1;
                while ($rows = mysqli_fetch_assoc($res)) {?>
                <tr>
                    <td><?=strtoupper($rows['name'])?></td>
                    <td><?php echo $rows['id'];?></td>
                    <td><?=strtoupper($rows['category'])?></td>
                    <td><?=$rows['contact']?></td>
                    <td><?=$rows['email']?></td>
                    <td>
                        <a class="btn2" href="viewForm.php?id=<?=$rows['id']?>">View</a>
                        <a class="btn2" href="editForm.php?id=<?=$rows['id']?>">Update</a>
                        <a class="btn2" href="deleteUser.php?id=<?=$rows['id']?>" onclick="return confirm('Are you sure you want to delete this item')">Delete</a>
                    </td>
                </tr>
                <?php $i++; }?>
            </tbody>
        </table>
        <?php }?>
    </div>

    <script>
        function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
            }       
        }
        }
    </script>

</body>
</html>
<?php }else {
    header("Location: index.php");
} ?>