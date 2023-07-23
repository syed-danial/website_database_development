<?php
    $mysqli = new mysqli("localhost","root","","dbproject");
    if ($mysqli -> connect_errno) 
    {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }

    $studentID = $_REQUEST['studentID'];
    $sql = "SELECT * FROM student WHERE studentID='$studentID'";
        if ($result = $mysqli -> query($sql)) {
        while ($row = $result -> fetch_row()) 
        {
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
        }
        $result -> free_result();
    }
    
    echo "<html>";
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
    echo "<div class='relative'>";
    $sql1 = "SELECT studentName FROM student WHERE fatherCNIC IN(SELECT fatherCNIC FROM student WHERE studentName = '$studentName') AND studentName <> '$studentName'";
    
    echo "</div>";
    echo "<div class='relative'>";
    echo "<h3>Student Information</h3>";
    echo "Student ID" . $studentID;
    echo "<br>";
    echo "<table>";
    
    echo "<tr>";
    echo "<th colspan='2'>";
    echo "Student Information";
    echo "</th>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<b>Student Name: </b>" . $studentName;
    echo "</tr>";
    echo "<br>";
    echo "<tr>";
    if ($result = $mysqli -> query($sql1)) 
    {
        if ($result->num_rows > 0) 
        {
            echo "<b>Siblings: </b>"; 
            while($row = $result->fetch_assoc()) 
            {
                echo $row['studentName'] ."<br>";
           }
           $result -> free_result();
        }
        else{
            echo "<b>Siblings: </b>" . "0";
        }
    }
    echo "</b></tr>";
    echo "<tr>";
    echo "<td>";
    echo "Date of Birth: " . $dateofBirth;
    echo "</td>";
    echo "<td>Gender: " . $studentGender;
    echo "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td colspan='2'>";
    echo "Student's Class: " . $studentClass;
    echo "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<th colspan='2'>";
    echo "Parents Information";
    echo "</th>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>";
    echo "Father Name: " . $fatherName;
    echo "</td>";
    echo "<td>Mother Name: " . $motherName;
    echo "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>";
    echo "Father CNIC: " . $fatherCNIC;
    echo "</td>";
    echo "<td>Mother CNIC: " . $motherCNIC;
    echo "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>";
    echo "Father Contact: " . $fatherContact;
    echo "</td>";
    echo "<td>Mother Contact: " . $motherContact;
    echo "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>";
    echo "Father Email: " . $fatherEmail;
    echo "</td>";
    echo "<td>Mother Email: " . $motherEmail;
    echo "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td colspan='2'>";
    echo "Address: " . $address;
    echo "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<th colspan='2'>";
    echo "Guardian's Information";
    echo "</th>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td colspan='2'>";
    echo "Guardian's Name: " . $guardianName;
    echo "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td colspan='2'>";
    echo "Guardian's CNIC: " . $guardianCNIC;
    echo "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td colspan='2'>";
    echo "Guardian's Contact: " . $guardianContact;
    echo "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td colspan='2'>";
    echo "Guardian's Gender: " . $guardianGender;
    echo "</td>";
    echo "</tr>";

    echo "</table>";
    echo "</div>";
    echo "</body></html>";

    $mysqli->close();
?>