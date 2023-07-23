<?php
    $mysqli = new mysqli("localhost","root","","dbproject");
    if ($mysqli -> connect_errno) 
    {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }

    $studentName = $_REQUEST['studentName'];
    $studentID = $_REQUEST['studentID'];
    $guardianName = $_REQUEST['guardianName'];
    $guardianCNIC = $_REQUEST['guardianCNIC'];
    $pregnant = $_REQUEST['pregnant'];
    $reason = $_REQUEST['reason'];

    $sql = "INSERT INTO guardianaccompanying(studentID, studentName, guardianName, guardianCNIC, pregenancy, reason) VALUES('$studentID', '$studentName', '$guardianName','$guardianCNIC','$pregnant','$reason')";
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