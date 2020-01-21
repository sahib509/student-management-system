<html>
    <head>
        <title>Student Management System</title>
    </head>
    <body style = "background-color:#ff6600">
        <h3 align = "right" style = "margin-right:20px;"><a href = "login.php"> Admin login</a></h3>
        <h1 align = "center" style = "background-color:#993300">Welcome to Student Management System</h1>
        <form action="index.php" method="POST">
            <table style="width: 50%; background-color:#999966 " align= center border = 2>
                <tr>
                    <td colspan="2" align = center>Student Information</td>
                </tr>
                <tr>
                    <td>Choose Standard</td>
                    <td>
                        <select name="std">
                            <option value = "1">1st</option>
                            <option value = "2">2nd</option>
                            <option selected value = "3">3rd</option>
                            <option value = "4">4th</option>
                            <option value = "5">5th</option>
                            <option value = "6">6th</option>
                            <option value = "7">7th</option>
                            <option value = "8">8th</option>
                            <option value = "9">9th</option>
                            <option value = "10">10th</option>
                            <option value = "11">11th</option>
                            <option value = "12">12th</option>
                            
                        </select>
                    </td>
                    
                </tr>
                <tr>
                    <td>Enter Rollno.</td>
                    <td><input type="text" name="rollno" ></td>                      
                   
                </tr>
                <tr>
                    <td colspan="2" align = center><input type="submit" value = "Show Info." name = 'submit'></td>
                </tr>
            </table>
        </form> 
    </body> 
</html>
<?php
    if(isset($_POST['submit'])) {

        $standard = $_POST['std'];
        $rollno = $_POST['rollno'];
        
        include('dbcon.php');
        include('function.php');
        
        showdetails($standard, $rollno);

    }

    
?>