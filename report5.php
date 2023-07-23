<?php
    $mysqli = new mysqli("localhost","root","","dbproject");
    if ($mysqli -> connect_errno) 
    {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    echo "<style>";
    echo "div.relative
    {
        position: relative;
        left: 500px;
        top: 100px;
        background-color: ivory;
        display: inline-block;
    }";
    echo "table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
      }";
    echo "</style>";
    echo "<body style='background-color:moccasin; background-image: url(https://hope-ngo.com/wp-content/uploads/2020/03/hope-northen-school.jpg);background-repeat: no-repeat ;background-size: 35% 100%;'>";
    
    $fatherID = $_REQUEST['fatherCNIC'];
    $motherID = $_REQUEST['motherCNIC'];
    $sql = "SELECT * FROM student WHERE fatherCNIC='$fatherID' AND motherCNIC = '$motherID'";
    if ($result = $mysqli -> query($sql)) 
    {
        if($result->num_rows>0)
        {
            while ($row = $result -> fetch_row()) 
            {
                $studentID = $row[0];
                $studentName = $row[1];
                $dateofBirth = $row[2];
                $studentGender = $row[3];
                $studentClass = $row[4];
                $fatherName = $row[5];
                $fatherCNIC = $row[6];
                $fatherContact = $row[7];
                $fatherEmail = $row[8];
                $motherName = $row[9];
                $motherCNIC = $row[10];
                $motherContact = $row[11];
                $motherEmail = $row[12];
                $address = $row[13];
                $guardianName = $row[14];
                $guardianCNIC = $row[15];
                $guardianGender = $row[16];
                $guardianContact = $row[17];
                echo "<br>";
                echo "<div class='relative'>";
                echo "Student ID:   " . $studentID . "<br>";
                echo "Student Name: " . $studentName . "<br>";
                echo "Class: " . $studentClass . "<br>";
                echo "Guardian: " . $guardianName . "<br>";
                echo "</div>";

                echo "<br>";
            }
        }
        $result -> free_result();
    }

?>