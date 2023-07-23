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
        top: 10px;
    }";
    echo "table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
      }";

    echo "input[type=text], input[type=number], input[type=date], input[type=submit] 
    {
        width: 30%;
        padding: 5px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 3px solid #ccc;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        outline: none;
    }";

    echo "</style>";
    echo "<body style='background-color:moccasin; background-image: url(https://hope-ngo.com/wp-content/uploads/2020/03/hope-northen-school.jpg);background-repeat: no-repeat ;background-size: 35% 100%;'>";
    echo "<h3 style='text-align: center';> HUMAREY BHACHEY<br>NUMBER OF STUDENTS PER CLASS</h3>";
    echo "</body>";

    echo "<div class='relative'>";
    echo "<form action='' method='post'>";
    echo "<b>Search From Class: <br><input type='text' name='term'>";
    echo "<br><input type='submit'>";
    echo "</form>";
    echo "</div>";

    if (!empty($_REQUEST['term'])) 
    {
        $term = $_REQUEST['term'];
        $numberofStudents = "SELECT Count(*) AS NumberofStudents FROM student WHERE studentClass='$term'";
        $result = $mysqli->query($numberofStudents);
        $data = $result->fetch_assoc();
        echo "<div class='relative'>";
        echo "Number of Students: " . $data['NumberofStudents'];
        echo "</div>";
    }

    $numberofStudents1 = "SELECT Count(*) AS NumberofStudents FROM student WHERE studentClass=1";
    $result1 = $mysqli->query($numberofStudents1);
    $data1 = $result1->fetch_assoc();
    echo "<div class='relative'>";
    echo "<h3>Class 1: </h3>";
    echo "Number of Students: " . $data1['NumberofStudents'];
    echo "</div>";

    $numberofMales1 = "SELECT Count(studentGender) AS NumberofBoys FROM student WHERE studentClass=1 AND studentGender='Male'";
    $result2 = $mysqli->query($numberofMales1);
    $data2 = $result2->fetch_assoc();
    echo "<div class='relative'>";
    echo "Number of Boys: " . $data2['NumberofBoys'];
    echo "</div>";

    $numberofFemales1 = "SELECT Count(studentGender) AS NumberofGirls FROM student WHERE studentClass=1 AND studentGender='Female'";
    $result3 = $mysqli->query($numberofFemales1);
    $data3 = $result3->fetch_assoc();
    echo "<div class='relative'>";
    echo "Number of Girls: " . $data3['NumberofGirls'];
    echo "</div>";

    $numberofStudents2 = "SELECT Count(*) AS NumberofStudents FROM student WHERE studentClass=2";
    $result4 = $mysqli->query($numberofStudents2);
    $data4 = $result4->fetch_assoc();
    echo "<div class='relative'>";
    echo "<h3>Class 2: </h3>";
    echo "Number of Students: " . $data4['NumberofStudents'];
    echo "</div>";

    $numberofMales2 = "SELECT Count(studentGender) AS NumberofBoys FROM student WHERE studentClass=2 AND studentGender='Male'";
    $result5 = $mysqli->query($numberofMales2);
    $data5 = $result5->fetch_assoc();
    echo "<div class='relative'>";
    echo "Number of Boys: " . $data5['NumberofBoys'];
    echo "</div>";

    $numberofFemales2 = "SELECT Count(studentGender) AS NumberofGirls FROM student WHERE studentClass=2 AND studentGender='Female'";
    $result6 = $mysqli->query($numberofFemales2);
    $data6 = $result6->fetch_assoc();
    echo "<div class='relative'>";
    echo "Number of Girls: " . $data6['NumberofGirls'];
    echo "</div>";

    $numberofStudents3 = "SELECT Count(*) AS NumberofStudents FROM student WHERE studentClass=3";
    $result7 = $mysqli->query($numberofStudents3);
    $data7  = $result7->fetch_assoc();
    echo "<div class='relative'>";
    echo "<h3>Class 3: </h3>";
    echo "Number of Students: " . $data7['NumberofStudents'];
    echo "</div>";

    $numberofMales3 = "SELECT Count(studentGender) AS NumberofBoys FROM student WHERE studentClass=3 AND studentGender='Male'";
    $result8 = $mysqli->query($numberofMales3);
    $data8 = $result8->fetch_assoc();
    echo "<div class='relative'>";
    echo "Number of Boys: " . $data8['NumberofBoys'];
    echo "</div>";

    $numberofFemales3 = "SELECT Count(studentGender) AS NumberofGirls FROM student WHERE studentClass=1 AND studentGender='Female'";
    $result9 = $mysqli->query($numberofFemales3);
    $data9 = $result9->fetch_assoc();
    echo "<div class='relative'>";
    echo "Number of Girls: " . $data9['NumberofGirls'];
    echo "</div>";


?>