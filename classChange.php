<?php
    $mysqli = new mysqli("localhost","root","","dbproject");
    if ($mysqli -> connect_errno) 
    {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }

    $studentID = $_REQUEST['studentID'];
    $currentClass =$_REQUEST['currentClass'];
    $newClass = $_REQUEST['newClass'];
    $dateAdded = $_REQUEST['dateAdded'];

    $ret = "SELECT studentName FROM student WHERE studentID='$studentID'";
    
    if($result=$mysqli->query($ret))
    {   
        while ($row = $result->fetch_object()) 
        {
            $studentName = $row->studentName;
        }
    }
    
    $update = "UPDATE student SET studentClass='$newClass' WHERE studentID='$studentID'";
    $sql = "INSERT INTO classrecord(studentID, studentName, currentClass, newClass, dateAdded) VALUES('$studentID', '$studentName', '$currentClass', '$newClass', '$dateAdded')";

    if($mysqli->query($update))
    {

    }
    else
    {
        echo "Data didnt enter" . $mysqli->error;
    }

    if($mysqli->query($sql))
    {
        echo "<h3>data stored in a database successfully." 
            . " Please browse your localhost php my admin" 
            . " to view the updated data</h3>";
    }
    else
    {
        echo "Data didnt enter" . $mysqli->error;
    }

    $mysqli->close();
?>