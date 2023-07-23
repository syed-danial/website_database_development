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
    echo "<h3 style='text-align: center';> HUMAREY BHACHEY<br>STUDENTS PER CLASS GUI</h3>";
    echo "</body>";
    
    echo "<div class='relative'>";
    echo "<form action='' method='post'>";
    echo "<b>Search From ID: <br><input type='text' name='term'>";
    echo "<br><input type='submit'>";
    echo "</form>";
    echo "</div>";
    
    if (!empty($_REQUEST['term'])) 
    {
        $term = $_REQUEST['term'];
        $sql = "SELECT studentID, studentName, dateofBirth, studentGender FROM student WHERE studentID='$term'";
        $result = $mysqli->query($sql);

        while($row = $result->fetch_assoc())
        {
            $birthDate = $row["dateofBirth"];
            $today = date("Y-m-d");
            $diff = date_diff(date_create($birthDate), date_create($today));
            $age = $diff->format('%y');
            echo "<div class='relative'>";
            echo "<table>";
            echo "<tr>";
            echo "<th>";
            echo "Student ID";
            echo "</th>";
            echo "<th>";
            echo "Name";
            echo"</th>";
            echo "<th>";
            echo "Age";
            echo "</th>";
            echo "<th>";
            echo "Gender";
            echo "</th>";
            echo "</tr>";
            echo "</table>";
            echo "</div>";

            echo "<div class = 'relative'>";
            echo "<table>";
            echo "<tr>";
            echo "<td>";
            echo $row["studentID"];
            echo "</td>";
            echo "<td>";
            echo $row["studentName"];
            echo "</td>";
            echo "<td>";
            echo $age;
            echo "</td>";
            echo "<td>";
            echo $row["studentGender"];
            echo "</tr>";
            echo "</table></div>";
        }
    }

    echo "<div class='relative'>";
    echo "<form action='' method='post'>";
    echo "<b>Delete (StudentID): <br><input type='text' name='value'>";
    echo "<br><input type='submit'>";
    echo "</form>";
    echo "</div>";

    if(!empty($_REQUEST['value']))
    {
        $id = $_REQUEST['value'];
        $sql = "DELETE FROM student WHERE studentID = '$id'";
        if($result = $mysqli->query($sql)){}
    }

    echo "<div class='relative'>";
    echo "<form action='' method='post'>";
    echo "<b>Update from StudentID: <br><input type='text' name='id'><br/>Name <input type='text' name='name'><br>Gender <input type='text'name='gender'><br>BirthDate <input type='date' name='dateofBirth'>";
    echo "<br><input type='submit'>";
    echo "</form>";
    echo "</div>";

    if(!empty($_REQUEST['id']))
    {
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $gender = $_REQUEST['gender'];

        $birthDate = $_REQUEST['dateofBirth'];
        $today = date("Y-m-d");
        $diff = date_diff(date_create($birthDate), date_create($today));
        $age = $diff->format('%y');

        $sql = "UPDATE student SET studentName='$name', studentGender='$gender', dateofBirth='$birthDate' WHERE studentID='$id'";
        if($result = $mysqli->query($sql)){}
    }

    echo "<div class='relative'>";
    echo "<a href=./admissionForm.html>";
    echo "<button>Add</button>";
    echo "</a>";
    echo "</div>";

    echo "<div class='relative'>";
    echo "<h5>Class 1";
    echo "</div>";
    $class1 = "SELECT studentID, studentName, dateofBirth, studentGender FROM student WHERE studentClass = 1";  
    $result = $mysqli->query($class1);

    if ($result->num_rows > 0) 
    {
        echo "<style>";
        echo "td, th 
        {
            width: 150px;
            text-align: center;
            border: 1px solid black;
            padding: 5px;
        }";
        echo "div.relative
        {
            position: relative;
            left: 500px;
            top: 10px;
        }";
        echo "</style>";
        echo "<div class='relative'>";
        echo "<table>";
        echo "<tr>";
        echo "<th>";
        echo "Student ID";
        echo "</th>";
        echo "<th>";
        echo "Name";
        echo"</th>";
        echo "<th>";
        echo "Age";
        echo "</th>";
        echo "<th>";
        echo "Gender";
        echo "</th>";
        echo "</tr>";
        echo "</table>";
        echo "</div>";
        while($row = $result->fetch_assoc()) 
        {
            $birthDate = $row["dateofBirth"];
            $today = date("Y-m-d");
            $diff = date_diff(date_create($birthDate), date_create($today));
            $age = $diff->format('%y');
            echo "<style>";
            echo "td, th {
                width: 150px;
                text-align: center;
                border: 1px solid black;
                padding: 5px;
              }";
            echo "</style>"; 
            echo "<div class = 'relative'>";
            echo "<table>";
            echo "<tr>";
            echo "<td>";
            echo $row["studentID"];
            echo "</td>";
            echo "<td>";
            echo $row["studentName"];
            echo "</td>";
            echo "<td>";
            echo $age;
            echo "</td>";
            echo "<td>";
            echo $row["studentGender"];
            echo "</tr>";
            echo "</table></div>";
        }
    } 
    else 
    {
        echo "0 results";
    }
    echo "<br>";
    echo "<div class='relative'>------------------------------------------------------------------------------------------------------------------------</div>";

    echo "<div class='relative'>";
    echo "<h5>Class 2</h5>";
    echo "</div>";

    $class2 = "SELECT studentID, studentName, dateofBirth, studentGender FROM student WHERE studentClass = 2";
    $result = $mysqli->query($class2);

    if ($result->num_rows > 0) 
    {
        // output data of each row
        echo "<style>";
        echo "td, th 
        {
            width: 150px;
            text-align: center;
            border: 1px solid black;
            padding: 5px;
        }";
        echo "div.relative
        {
            position: relative;
            left: 500px;
            top: 10px;
        }";
        echo "</style>";
        echo "<div class='relative'>";
        echo "<table>";
        echo "<tr>";
        echo "<th>";
        echo "Student ID";
        echo "</th>";
        echo "<th>";
        echo "Name";
        echo"</th>";
        echo "<th>";
        echo "Age";
        echo "</th>";
        echo "<th>";
        echo "Gender";
        echo "</th>";
        echo "</tr>";
        echo "</table>";
        echo "</div>";
        while($row = $result->fetch_assoc()) 
        {
            $birthDate = $row["dateofBirth"];
            $today = date("Y-m-d");
            $diff = date_diff(date_create($birthDate), date_create($today));
            $age = $diff->format('%y');
            echo "<style>";
            echo "td, th {
                width: 150px;
                text-align: center;
                border: 1px solid black;
                padding: 5px;
              }";
            echo "</style>"; 
            echo "<div class = 'relative'>";
            echo "<table>";
            echo "<tr>";
            echo "<td>";
            echo $row["studentID"];
            echo "</td>";
            echo "<td>";
            echo $row["studentName"];
            echo "</td>";
            echo "<td>";
            echo $age;
            echo "</td>";
            echo "<td>";
            echo $row["studentGender"];
            echo "</tr>";
            echo "</table></div>";
        }
    } 
    else 
    {
        echo "0 results";
    }
    echo "<br>";
    echo "<div class='relative'>------------------------------------------------------------------------------------------------------------------------</div>";

    echo "<div class='relative'>";
    echo "<h5>Class 3</h5>";
    echo "</div>";

    $class3 = "SELECT studentID, studentName, dateofBirth, studentGender FROM student WHERE studentClass = 3";
    $result = $mysqli->query($class3);

    if ($result->num_rows > 0) 
    {
        echo "<style>";
        echo "td, th 
        {
            width: 150px;
            text-align: center;
            border: 1px solid black;
            padding: 5px;
        }";
        echo "div.relative
        {
            position: relative;
            left: 500px;
            top: 10px;
        }";
        echo "</style>";
        echo "<div class='relative'>";
        echo "<table>";
        echo "<tr>";
        echo "<th>";
        echo "Student ID";
        echo "</th>";
        echo "<th>";
        echo "Name";
        echo"</th>";
        echo "<th>";
        echo "Age";
        echo "</th>";
        echo "<th>";
        echo "Gender";
        echo "</th>";
        echo "</tr>";
        echo "</table>";
        echo "</div>";
        while($row = $result->fetch_assoc()) 
        {
            $birthDate = $row["dateofBirth"];
            $today = date("Y-m-d");
            $diff = date_diff(date_create($birthDate), date_create($today));
            $age = $diff->format('%y');
            echo "<style>";
            echo "td, th {
                width: 150px;
                text-align: center;
                border: 1px solid black;
                padding: 5px;
              }";
            echo "</style>"; 
            echo "<div class = 'relative'>";
            echo "<table>";
            echo "<tr>";
            echo "<td>";
            echo $row["studentID"];
            echo "</td>";
            echo "<td>";
            echo $row["studentName"];
            echo "</td>";
            echo "<td>";
            echo $age;
            echo "</td>";
            echo "<td>";
            echo $row["studentGender"];
            echo "</tr>";
            echo "</table></div>";
        }
    } 

    echo "<div class='relative'>------------------------------------------------------------------------------------------------------------------------</div>";

    echo "<div class='relative'>";
    echo "<h5>Class 4</h5>";
    echo "</div>";

    $class4 = "SELECT studentID, studentName, dateofBirth, studentGender FROM student WHERE studentClass = 4";
    $result = $mysqli->query($class4);

    if ($result->num_rows > 0) 
    {
        echo "<style>";
        echo "td, th 
        {
            width: 150px;
            text-align: center;
            border: 1px solid black;
            padding: 5px;
        }";
        echo "div.relative
        {
            position: relative;
            left: 500px;
            top: 10px;
        }";
        echo "</style>";
        echo "<div class='relative'>";
        echo "<table>";
        echo "<tr>";
        echo "<th>";
        echo "Student ID";
        echo "</th>";
        echo "<th>";
        echo "Name";
        echo"</th>";
        echo "<th>";
        echo "Age";
        echo "</th>";
        echo "<th>";
        echo "Gender";
        echo "</th>";
        echo "</tr>";
        echo "</table>";
        echo "</div>";
        while($row = $result->fetch_assoc()) 
        {
            $birthDate = $row["dateofBirth"];
            $today = date("Y-m-d");
            $diff = date_diff(date_create($birthDate), date_create($today));
            $age = $diff->format('%y');
            echo "<style>";
            echo "td, th {
                width: 150px;
                text-align: center;
                border: 1px solid black;
                padding: 5px;
              }";
            echo "</style>"; 
            echo "<div class = 'relative'>";
            echo "<table>";
            echo "<tr>";
            echo "<td>";
            echo $row["studentID"];
            echo "</td>";
            echo "<td>";
            echo $row["studentName"];
            echo "</td>";
            echo "<td>";
            echo $age;
            echo "</td>";
            echo "<td>";
            echo $row["studentGender"];
            echo "</tr>";
            echo "</table></div>";
        }
    }
    echo "<div class='relative'>------------------------------------------------------------------------------------------------------------------------</div>";

    echo "<div class='relative'>";
    echo "<h5>Class 5</h5>";
    echo "</div>";

    $class5 = "SELECT studentID, studentName, dateofBirth, studentGender FROM student WHERE studentClass = 5";
    $result = $mysqli->query($class5);

    if ($result->num_rows > 0) 
    {
        echo "<style>";
        echo "td, th 
        {
            width: 150px;
            text-align: center;
            border: 1px solid black;
            padding: 5px;
        }";
        echo "div.relative
        {
            position: relative;
            left: 500px;
            top: 10px;
        }";
        echo "</style>";
        echo "<div class='relative'>";
        echo "<table>";
        echo "<tr>";
        echo "<th>";
        echo "Student ID";
        echo "</th>";
        echo "<th>";
        echo "Name";
        echo"</th>";
        echo "<th>";
        echo "Age";
        echo "</th>";
        echo "<th>";
        echo "Gender";
        echo "</th>";
        echo "</tr>";
        echo "</table>";
        echo "</div>";
        while($row = $result->fetch_assoc()) 
        {
            $birthDate = $row["dateofBirth"];
            $today = date("Y-m-d");
            $diff = date_diff(date_create($birthDate), date_create($today));
            $age = $diff->format('%y');
            echo "<style>";
            echo "td, th {
                width: 150px;
                text-align: center;
                border: 1px solid black;
                padding: 5px;
              }";
            echo "</style>"; 
            echo "<div class = 'relative'>";
            echo "<table>";
            echo "<tr>";
            echo "<td>";
            echo $row["studentID"];
            echo "</td>";
            echo "<td>";
            echo $row["studentName"];
            echo "</td>";
            echo "<td>";
            echo $age;
            echo "</td>";
            echo "<td>";
            echo $row["studentGender"];
            echo "</tr>";
            echo "</table></div>";
        }
    }  
    echo "<div class='relative'>------------------------------------------------------------------------------------------------------------------------</div>";

    echo "<div class='relative'>";
    echo "<h5>Class 6</h5>";
    echo "</div>";

    $class6 = "SELECT studentID, studentName, dateofBirth, studentGender FROM student WHERE studentClass = 6";
    $result = $mysqli->query($class6);

    if ($result->num_rows > 0) 
    {
        echo "<style>";
        echo "td, th 
        {
            width: 150px;
            text-align: center;
            border: 1px solid black;
            padding: 5px;
        }";
        echo "div.relative
        {
            position: relative;
            left: 500px;
            top: 10px;
        }";
        echo "</style>";
        echo "<div class='relative'>";
        echo "<table>";
        echo "<tr>";
        echo "<th>";
        echo "Student ID";
        echo "</th>";
        echo "<th>";
        echo "Name";
        echo"</th>";
        echo "<th>";
        echo "Age";
        echo "</th>";
        echo "<th>";
        echo "Gender";
        echo "</th>";
        echo "</tr>";
        echo "</table>";
        echo "</div>";
        while($row = $result->fetch_assoc()) 
        {
            $birthDate = $row["dateofBirth"];
            $today = date("Y-m-d");
            $diff = date_diff(date_create($birthDate), date_create($today));
            $age = $diff->format('%y');
            echo "<style>";
            echo "td, th {
                width: 150px;
                text-align: center;
                border: 1px solid black;
                padding: 5px;
              }";
            echo "</style>"; 
            echo "<div class = 'relative'>";
            echo "<table>";
            echo "<tr>";
            echo "<td>";
            echo $row["studentID"];
            echo "</td>";
            echo "<td>";
            echo $row["studentName"];
            echo "</td>";
            echo "<td>";
            echo $age;
            echo "</td>";
            echo "<td>";
            echo $row["studentGender"];
            echo "</tr>";
            echo "</table></div>";
        }
    } 
    echo "<div class='relative'>------------------------------------------------------------------------------------------------------------------------</div>";

    echo "<div class='relative'>";
    echo "<h5>Class 7</h5>";
    echo "</div>";

    $class7 = "SELECT studentID, studentName, dateofBirth, studentGender FROM student WHERE studentClass = 7";
    $result = $mysqli->query($class7);

    if ($result->num_rows > 0) 
    {
        echo "<style>";
        echo "td, th 
        {
            width: 150px;
            text-align: center;
            border: 1px solid black;
            padding: 5px;
        }";
        echo "div.relative
        {
            position: relative;
            left: 500px;
            top: 10px;
        }";
        echo "</style>";
        echo "<div class='relative'>";
        echo "<table>";
        echo "<tr>";
        echo "<th>";
        echo "Student ID";
        echo "</th>";
        echo "<th>";
        echo "Name";
        echo"</th>";
        echo "<th>";
        echo "Age";
        echo "</th>";
        echo "<th>";
        echo "Gender";
        echo "</th>";
        echo "</tr>";
        echo "</table>";
        echo "</div>";
        while($row = $result->fetch_assoc()) 
        {
            $birthDate = $row["dateofBirth"];
            $today = date("Y-m-d");
            $diff = date_diff(date_create($birthDate), date_create($today));
            $age = $diff->format('%y');
            echo "<style>";
            echo "td, th {
                width: 150px;
                text-align: center;
                border: 1px solid black;
                padding: 5px;
              }";
            echo "</style>"; 
            echo "<div class = 'relative'>";
            echo "<table>";
            echo "<tr>";
            echo "<td>";
            echo $row["studentID"];
            echo "</td>";
            echo "<td>";
            echo $row["studentName"];
            echo "</td>";
            echo "<td>";
            echo $age;
            echo "</td>";
            echo "<td>";
            echo $row["studentGender"];
            echo "</tr>";
            echo "</table></div>";
        }
    } 
    echo "<div class='relative'>------------------------------------------------------------------------------------------------------------------------</div>";

    echo "<div class='relative'>";
    echo "<h5>Class 8</h5>";
    echo "</div>";

    $class8 = "SELECT studentID, studentName, dateofBirth, studentGender FROM student WHERE studentClass = 8";
    $result = $mysqli->query($class8);

    if ($result->num_rows > 0) 
    {
        echo "<style>";
        echo "td, th 
        {
            width: 150px;
            text-align: center;
            border: 1px solid black;
            padding: 5px;
        }";
        echo "div.relative
        {
            position: relative;
            left: 500px;
            top: 10px;
        }";
        echo "</style>";
        echo "<div class='relative'>";
        echo "<table>";
        echo "<tr>";
        echo "<th>";
        echo "Student ID";
        echo "</th>";
        echo "<th>";
        echo "Name";
        echo"</th>";
        echo "<th>";
        echo "Age";
        echo "</th>";
        echo "<th>";
        echo "Gender";
        echo "</th>";
        echo "</tr>";
        echo "</table>";
        echo "</div>";
        while($row = $result->fetch_assoc()) 
        {
            $birthDate = $row["dateofBirth"];
            $today = date("Y-m-d");
            $diff = date_diff(date_create($birthDate), date_create($today));
            $age = $diff->format('%y');
            echo "<style>";
            echo "td, th {
                width: 150px;
                text-align: center;
                border: 1px solid black;
                padding: 5px;
              }";
            echo "</style>"; 
            echo "<div class = 'relative'>";
            echo "<table>";
            echo "<tr>";
            echo "<td>";
            echo $row["studentID"];
            echo "</td>";
            echo "<td>";
            echo $row["studentName"];
            echo "</td>";
            echo "<td>";
            echo $age;
            echo "</td>";
            echo "<td>";
            echo $row["studentGender"];
            echo "</tr>";
            echo "</table></div>";
        }
    }
    echo "<div class='relative'>------------------------------------------------------------------------------------------------------------------------</div>";

    echo "<div class='relative'>";
    echo "<h5>Class 9</h5>";
    echo "</div>";

    $class9 = "SELECT studentID, studentName, dateofBirth, studentGender FROM student WHERE studentClass = 9";
    $result = $mysqli->query($class9);

    if ($result->num_rows > 0) 
    {
        echo "<style>";
        echo "td, th 
        {
            width: 150px;
            text-align: center;
            border: 1px solid black;
            padding: 5px;
        }";
        echo "div.relative
        {
            position: relative;
            left: 500px;
            top: 10px;
        }";
        echo "</style>";
        echo "<div class='relative'>";
        echo "<table>";
        echo "<tr>";
        echo "<th>";
        echo "Student ID";
        echo "</th>";
        echo "<th>";
        echo "Name";
        echo"</th>";
        echo "<th>";
        echo "Age";
        echo "</th>";
        echo "<th>";
        echo "Gender";
        echo "</th>";
        echo "</tr>";
        echo "</table>";
        echo "</div>";
        while($row = $result->fetch_assoc()) 
        {
            $birthDate = $row["dateofBirth"];
            $today = date("Y-m-d");
            $diff = date_diff(date_create($birthDate), date_create($today));
            $age = $diff->format('%y');
            echo "<style>";
            echo "td, th {
                width: 150px;
                text-align: center;
                border: 1px solid black;
                padding: 5px;
              }";
            echo "</style>"; 
            echo "<div class = 'relative'>";
            echo "<table>";
            echo "<tr>";
            echo "<td>";
            echo $row["studentID"];
            echo "</td>";
            echo "<td>";
            echo $row["studentName"];
            echo "</td>";
            echo "<td>";
            echo $age;
            echo "</td>";
            echo "<td>";
            echo $row["studentGender"];
            echo "</tr>";
            echo "</table></div>";
        }
    }  
    echo "<div class='relative'>------------------------------------------------------------------------------------------------------------------------</div>";

    echo "<div class='relative'>";
    echo "<h5>Class 10</h5>";
    echo "</div>";

    $class10 = "SELECT studentID, studentName, dateofBirth, studentGender FROM student WHERE studentClass = 10";
    $result = $mysqli->query($class10);

    if ($result->num_rows > 0) 
    {
        echo "<style>";
        echo "td, th 
        {
            width: 150px;
            text-align: center;
            border: 1px solid black;
            padding: 5px;
        }";
        echo "div.relative
        {
            position: relative;
            left: 500px;
            top: 10px;
        }";
        echo "</style>";
        echo "<div class='relative'>";
        echo "<table>";
        echo "<tr>";
        echo "<th>";
        echo "Student ID";
        echo "</th>";
        echo "<th>";
        echo "Name";
        echo"</th>";
        echo "<th>";
        echo "Age";
        echo "</th>";
        echo "<th>";
        echo "Gender";
        echo "</th>";
        echo "</tr>";
        echo "</table>";
        echo "</div>";
        while($row = $result->fetch_assoc()) 
        {
            $birthDate = $row["dateofBirth"];
            $today = date("Y-m-d");
            $diff = date_diff(date_create($birthDate), date_create($today));
            $age = $diff->format('%y');
            echo "<style>";
            echo "td, th {
                width: 150px;
                text-align: center;
                border: 1px solid black;
                padding: 5px;
              }";
            echo "</style>"; 
            echo "<div class = 'relative'>";
            echo "<table>";
            echo "<tr>";
            echo "<td>";
            echo $row["studentID"];
            echo "</td>";
            echo "<td>";
            echo $row["studentName"];
            echo "</td>";
            echo "<td>";
            echo $age;
            echo "</td>";
            echo "<td>";
            echo $row["studentGender"];
            echo "</tr>";
            echo "</table></div>";
        }
    } 

    echo "<div class='relative'>------------------------------------------------------------------------------------------------------------------------</div>";

    echo "<div class='relative'>";
    echo "<h5>Class 11</h5>";
    echo "</div>";

    $class11 = "SELECT studentID, studentName, dateofBirth, studentGender FROM student WHERE studentClass = 11";
    $result = $mysqli->query($class11);

    if ($result->num_rows > 0) 
    {
        echo "<style>";
        echo "td, th 
        {
            width: 150px;
            text-align: center;
            border: 1px solid black;
            padding: 5px;
        }";
        echo "div.relative
        {
            position: relative;
            left: 500px;
            top: 10px;
        }";
        echo "</style>";
        echo "<div class='relative'>";
        echo "<table>";
        echo "<tr>";
        echo "<th>";
        echo "Student ID";
        echo "</th>";
        echo "<th>";
        echo "Name";
        echo"</th>";
        echo "<th>";
        echo "Age";
        echo "</th>";
        echo "<th>";
        echo "Gender";
        echo "</th>";
        echo "</tr>";
        echo "</table>";
        echo "</div>";
        while($row = $result->fetch_assoc()) 
        {
            $birthDate = $row["dateofBirth"];
            $today = date("Y-m-d");
            $diff = date_diff(date_create($birthDate), date_create($today));
            $age = $diff->format('%y');
            echo "<style>";
            echo "td, th {
                width: 150px;
                text-align: center;
                border: 1px solid black;
                padding: 5px;
              }";
            echo "</style>"; 
            echo "<div class = 'relative'>";
            echo "<table>";
            echo "<tr>";
            echo "<td>";
            echo $row["studentID"];
            echo "</td>";
            echo "<td>";
            echo $row["studentName"];
            echo "</td>";
            echo "<td>";
            echo $age;
            echo "</td>";
            echo "<td>";
            echo $row["studentGender"];
            echo "</tr>";
            echo "</table></div>";
        }
    }
    echo "<div class='relative'>------------------------------------------------------------------------------------------------------------------------</div>";

    echo "<div class='relative'>";
    echo "<h5>Class 12</h5>";
    echo "</div>";

    $class12 = "SELECT studentID, studentName, dateofBirth, studentGender FROM student WHERE studentClass = 12";
    $result = $mysqli->query($class12);

    if ($result->num_rows > 0) 
    {
        echo "<style>";
        echo "td, th 
        {
            width: 150px;
            text-align: center;
            border: 1px solid black;
            padding: 5px;
        }";
        echo "div.relative
        {
            position: relative;
            left: 500px;
            top: 10px;
        }";
        echo "</style>";
        echo "<div class='relative'>";
        echo "<table>";
        echo "<tr>";
        echo "<th>";
        echo "Student ID";
        echo "</th>";
        echo "<th>";
        echo "Name";
        echo"</th>";
        echo "<th>";
        echo "Age";
        echo "</th>";
        echo "<th>";
        echo "Gender";
        echo "</th>";
        echo "</tr>";
        echo "</table>";
        echo "</div>";
        while($row = $result->fetch_assoc()) 
        {
            $birthDate = $row["dateofBirth"];
            $today = date("Y-m-d");
            $diff = date_diff(date_create($birthDate), date_create($today));
            $age = $diff->format('%y');
            echo "<style>";
            echo "td, th {
                width: 150px;
                text-align: center;
                border: 1px solid black;
                padding: 5px;
              }";
            echo "</style>"; 
            echo "<div class = 'relative'>";
            echo "<table>";
            echo "<tr>";
            echo "<td>";
            echo $row["studentID"];
            echo "</td>";
            echo "<td>";
            echo $row["studentName"];
            echo "</td>";
            echo "<td>";
            echo $age;
            echo "</td>";
            echo "<td>";
            echo $row["studentGender"];
            echo "</tr>";
            echo "</table></div>";
        }
    }
    
    echo "<div class='relative'>------------------------------------------------------------------------------------------------------------------------</div>";

    echo "<div class='relative'>";
    echo "<h5>Class 13</h5>";
    echo "</div>";

    $class13 = "SELECT studentID, studentName, dateofBirth, studentGender FROM student WHERE studentClass = 13";
    $result = $mysqli->query($class13);

    if ($result->num_rows > 0) 
    {
        echo "<style>";
        echo "td, th 
        {
            width: 150px;
            text-align: center;
            border: 1px solid black;
            padding: 5px;
        }";
        echo "div.relative
        {
            position: relative;
            left: 500px;
            top: 10px;
        }";
        echo "</style>";
        echo "<div class='relative'>";
        echo "<table>";
        echo "<tr>";
        echo "<th>";
        echo "Student ID";
        echo "</th>";
        echo "<th>";
        echo "Name";
        echo"</th>";
        echo "<th>";
        echo "Age";
        echo "</th>";
        echo "<th>";
        echo "Gender";
        echo "</th>";
        echo "</tr>";
        echo "</table>";
        echo "</div>";
        while($row = $result->fetch_assoc()) 
        {
            $birthDate = $row["dateofBirth"];
            $today = date("Y-m-d");
            $diff = date_diff(date_create($birthDate), date_create($today));
            $age = $diff->format('%y');
            echo "<style>";
            echo "td, th {
                width: 150px;
                text-align: center;
                border: 1px solid black;
                padding: 5px;
              }";
            echo "</style>"; 
            echo "<div class = 'relative'>";
            echo "<table>";
            echo "<tr>";
            echo "<td>";
            echo $row["studentID"];
            echo "</td>";
            echo "<td>";
            echo $row["studentName"];
            echo "</td>";
            echo "<td>";
            echo $age;
            echo "</td>";
            echo "<td>";
            echo $row["studentGender"];
            echo "</tr>";
            echo "</table></div>";
        }
    } 
?>