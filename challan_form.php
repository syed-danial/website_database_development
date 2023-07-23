<?php
    $mysqli = new mysqli("localhost","root","","dbproject");
    if ($mysqli -> connect_errno) 
    {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    
    $studentName = $_REQUEST['studentName'];
    $challanNumber = $_REQUEST['challanNumber'];
    $fatherCNIC = $_REQUEST['parentCNIC'];
    $feeAmount = $_REQUEST['feeAmount'];
    $email = $_REQUEST['email'];
    $employee = $_REQUEST['emp_check'];
    
    if($employee == 'Yes' || $employee == 'YES' || $employee == 'yes')
    {
        $feeAmount = '0';
    }

    $count = "SELECT Count(fatherCNIC) FROM student WHERE fatherCNIC='$fatherCNIC'";
    $result = $mysqli->query($count);
    if($result >=3)
    {
        $discount = '50%';
        $finalAmount = $feeAmount/2;
    }
    else
    {
        $discount = '0%';
        $finalAmount = $feeAmount;
    }
    echo "<head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- Bootstrap CSS -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

    <style>
        .center_forms {
            width: 70%;
            height: 70%;
            overflow: auto;
            margin: auto;
            bottom: 0;
            border: 5px solid black;
            padding: 20px 50px;

            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/opacity/see-through */
            color: white;
            font-weight: bold;
            border: 3px solid #f1f1f1;
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 80%;
            padding: 20px;
            text-align: center;

        }
        
        table, th, td, tr
        {
            border: 1px solid black;
            border-collapse: collapse;
        }

        .whole_body{
            
        }

    </style>

</head>";

echo "<body class='whole_body' background='form_bg.jpeg'>";
echo "<div class='center_forms'>";
echo "<h5 style='text-align:center;'>CHALLAN GENERATED</h5>";
echo "<table style='margin-top:20px; margin-left:420px; background-color:ivory;'>";
echo "<tr><th>Challan Number</th><td>" .$challanNumber;
echo "</td></tr>";
echo "<tr><th>Student Name</th><td>" .$studentName;
echo "</td></tr>";
echo "<tr><th>Father CNIC</th><td>" .$fatherCNIC;
echo "</td></tr>";
echo "<tr><th>NGO's Employee</th><td>" .$employee;
echo "</td></tr>";
echo "<tr><th>Fee Amount(Rs.)</th><td>" .$feeAmount;
echo "</td></tr>";
echo "<tr><th>Discount</th><td>" .$discount;
echo "</td></tr>";
echo "<tr><th>Final Amount(Rs.)</th><td>" .$finalAmount;
echo "</td></tr>";
echo "</table>";
echo "</div>";
echo "</body>";
?>