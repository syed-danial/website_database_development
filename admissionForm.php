<?php
    $mysqli = new mysqli("localhost","root","","dbproject");
    if ($mysqli -> connect_errno) 
    {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }

    $studentName = $_REQUEST['studentName'];
    $birthDate = $_REQUEST['dateofBirth'];
    $studentGender = $_REQUEST['studentGender'];
    $fatherName = $_REQUEST['fatherName'];
    $motherName = $_REQUEST['motherName'];
    $fatherCNIC = $_REQUEST['fatherCNIC'];
    $motherCNIC = $_REQUEST['motherCNIC'];
    $fatherContact = $_REQUEST['fatherContact'];
    $motherContact = $_REQUEST['motherContact'];
    $fatherEmail = $_REQUEST['fatherEmail'];
    $motherEmail = $_REQUEST['motherEmail'];
    $address = $_REQUEST['address'];
    $guardianName = $_REQUEST['GuardianName'];
    $guardianCNIC = $_REQUEST['GuardianCNIC'];
    $guardianContact = $_REQUEST['guardianContact'];
    $guardianGender = $_REQUEST['guardianGender'];
    $guardianRelation = $_REQUEST['relation'];
    $dateAdded = $_REQUEST['dateAdded'];
    
    $today = date("Y-m-d");
    $diff = date_diff(date_create($birthDate), date_create($today));
    $age = $diff->format('%y');
    
    if($age == 3)
    {
        $class=1;
    }
    if($age==4)
    {
        $class=2;
    }
    if($age==5)
    {
        $class=3;
    }
    if($age==6)
    {
        $class = 4;
    }
    if($age==7)
    {
        $class = 5;
    }
    if($age==8)
    {
        $class = 6;
    }
    if($age==9)
    {
        $class = 7;
    }
    if($age==10)
    {
        $class = 8;
    }
    if($age==11)
    {
        $class = 9;
    }
    if($age==12)
    {
        $class = 10;
    }
    if($age==13)
    {
        $class = 11;
    }
    if($age==14)
    {
        $class = 12;
    }
    if($age==15)
    {
        $class = 13;
    }
   
    $sql ="INSERT INTO student(studentName, dateofBirth, studentGender, studentClass, fatherName, fatherCNIC, fatherContact, fatherEmail, motherName, motherCNIC, motherContact, motherEmail, `address`, GuardianName, GuardianCNIC, guardianGender, guardianContact, relation, dateAdded) VALUES('$studentName', '$birthDate', '$studentGender','$class', '$fatherName', '$fatherCNIC', '$fatherContact', '$fatherEmail', '$motherName', '$motherCNIC', '$motherContact', '$motherEmail', '$address', '$guardianName', '$guardianCNIC', '$guardianGender', '$guardianContact', '$guardianRelation', '$dateAdded')"; 
    $ID = "SELECT `studentID` FROM `student` where `studentName` = $studentName AND `fatherCNIC`= '$fatherCNIC' AND `motherCNIC`='$motherCNIC'";
    echo "<html><body>";
    echo "<h3 style='text-align: center;'> YOUR STUDENT CLASS IS: " . $class;
    if($result = $mysqli->query($ID))
    {
        while($row = $result->fetch_assoc())
        {
            echo "The student ID is" . $row['studentID'];
        }
        $result->free();
    }
        echo "</h3></body></html>";
    if($mysqli->query($sql))
    {
        if($guardianGender=="Female" || $guardianGender=="female")
        {
            echo "<h3>Student's Information has been successfully inserted into database.<br>Kindly press the below button to be redirected to the home page</h3>";
            echo "<html>";
            echo "<body>";
            echo "<a href='./guardianAccompanying.html'>";
            echo "<button type='button'>Proceed to next Form </button>";
            echo "</a></body></html>";
        }
        else
        {
            echo "<html>";
            echo "<body>";
            echo "<h3>Data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>";
            echo "<a href='./homepage.html'";
            echo "<buttom type='button'>Home Page</button></a>";         
            echo "</body></html>";   
        }
    }
    else{
        echo "Data didnt enter" . $mysqli->error;
    }
    $mysqli->close();

?>