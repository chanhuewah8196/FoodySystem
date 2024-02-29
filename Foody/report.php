<?php
	include('connect.php');
	
    $sql1 = "SELECT *, count(category) as number FROM user GROUP BY category"; 
    $sql2 = "SELECT *, count(gender) as total FROM user GROUP BY gender"; 
    $sql3 = "SELECT *, count(location) as place FROM user GROUP BY location"; 
	$result1 = mysqli_query($conn, $sql1);
    $result2 = mysqli_query($conn, $sql2);
    $result3 = mysqli_query($conn, $sql3);
    
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

        .header {
            align-items: center;
            height: 120px;
        }
        

        .header2 {
            color: blue;
            font-family: Lucida Handwriting;
            font-weight: 900;
            font-size: 50px;
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

        .graph {
            text-align: center;
            align-items: center;
            justify-content: center;

        }

        .piechart {
            width: 80%; 
            height: 500px; 
            margin: 0 10%; 
            border: 1px;
            box-shadow: 5px 10px #888888;
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
            font-size: 20px;
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
    </style>
</head>
<script src="https://www.gstatic.com/charts/loader.js"></script>  
<script>  
    google.charts.load('current', {'packages':['corechart']});  
    google.charts.setOnLoadCallback(drawChart);  
    function drawChart() {  
        var data = google.visualization.arrayToDataTable([['category', 'number'],  
        <?php  
            while($row = mysqli_fetch_array($result1)) {  
                echo "['".$row["category"]."', ".$row["number"]."],";  
            }  
        ?>  
        ]);  
        var option = {   
            title: 'TOTAL NUMBER OF USERS ACCORDING TO THE CATEGORY',
            is3D:true
            
        }; 
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, option);  
    }
</script>
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

    <div class="graph">
        <h1 class="header2">Report</h1>
        <div>
            <a class="btn" href="report.php"><span>By Category</span></a>
            <a class="btn" href="report1.php"><span>By Gender</span></a>
            <a class="btn" href="report2.php"><span>By Location</span></a>
        </div>
        <br>
        <div class="piechart" id="piechart"></div>
        <br>
        <a class="btn" href="admin.php"><span>Back</span></a>
    </div>
</body>
</html>