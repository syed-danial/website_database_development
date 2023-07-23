<?php
    $mysqli = new mysqli("localhost","root","","dbproject");
    if ($mysqli -> connect_errno) 
    {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    else
    {
        if(($_POST['email'] == 'i190536@nu.edu.pk' && $_POST['passcode'] == '1234') || ($_POST['email'] == 'i190414@nu.edu.pk' && $_POST['passcode'] == '1234') || ($_POST['email'] == 'i192155@nu.edu.pk' && $_POST['passcode'] == '1234'))
        {
            echo "<html>";
            echo "<style>";
            echo "div.relative
                {
                    position: relative;
                    left: 500px;
                }";
            echo "</style>";
            echo "<body style='background-color:moccasin; background-image: url(https://hope-ngo.com/wp-content/uploads/2020/03/hope-northen-school.jpg);background-repeat: no-repeat ;background-size: 35% 100%;'>";
            echo"<div class='relative'>
                <br><br><br><br><br><br>
                <h2 style='font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;'>Humarey Bhachey Admin Page</h2>                                                        
                </div>
                <a href='./challan_form.html'>
                <button class='button' style='background-color:cadetblue ; position: relative; left: 500px;'>Fee Challan</button> 
                </a>
                <br>
                <a href='./classChange.html'>
                <button class='button' style='background-color:cadetblue ; position: relative; left: 500px;'>Change Student Class</button> 
                </a>";
            echo "</body>";
            echo "</html>";
        }
        else
        {
            echo "Invalid email/password! Try again!";
        }
    }
?>