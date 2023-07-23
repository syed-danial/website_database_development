<?php
    $mysqli = new mysqli("localhost","root","","dbproject");
    if ($mysqli -> connect_errno) 
    {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    $studentName = $_REQUEST['studentName'];
    $fatherName = $_REQUEST['fatherName'];
    $guardianName = $_REQUEST['guardianName'];
    $ngoEmployee = $_REQUEST['ngoEmployee'];
    $amount = $_REQUEST['amount'];
    $email = $_REQUEST['email'];

    if($ngoEmployee == "yes" || $ngoEmployee == "Yes" ||  $ngoEmployee == "YES")
    {
        $amount = 0;
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
    echo "</style>";
    $sql = "INSERT INTO studentchallan (studentName, fatherName, guardianName, amount, ngoEmployee, email) VALUES('$studentName', '$fatherName', '$guardianName', '$amount', '$ngoEmployee', '$email')";

    if($mysqli->query($sql)){
        echo "<div class='relative'>";
        echo "<html>";
        echo "<body style='background-color:moccasin; background-image: url(https://hope-ngo.com/wp-content/uploads/2020/03/hope-northen-school.jpg);background-repeat: no-repeat ;background-size: 35% 100%;'>";
        echo "<a href='./admissionForm.html'>";
        echo "<button type='button'>Proceed to Form </button>";
        echo "</a></div></body></html>";
    }
    else{
        echo "Data didnt enter" . $mysqli->error;
    }
    $mysqli->close();     
?>
