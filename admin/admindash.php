<?php
session_start();
if(isset($_SESSION['uid'])){
    echo"";
}
else{
    header('location:../login.php');
}
?>
<?php
    include('header.php');
?>

<div align = "center" class = "admintitle">
    <h2><a style="float: right; margin-right: 20px; color: #fff;" href = "logout.php">Logout</a></h2>
   <h1> Welcome To Admin Dashboard</h1>

</div>

<br>
<div class = "dashboard">
        <table border="1" width = "50%">
            <tr>
                <td>1.</td><td><a href="addstudent.php">Insert Student Details</a></td>
            </tr>
            <tr> 
                <td>2.</td><td><a href="updatestudent.php">Update Student Details</a></td>
            </tr>
            <tr>    
                <td>3.</td><td><a href="deletestudent.php">Delete Student Details</a></td>
            </tr>
            
        </table>
</div>

</body>
</html>