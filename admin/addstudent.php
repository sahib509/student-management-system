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
    include('titlehead.php');
?>
        <br>
        <form method="POST" action="addstudent.php" enctype="multipart/form-data">
            <table align="center" border="2" style="width: 50%; color = black">
                <tr>
                    <td align = 'center'>Roll No</td>
                    <td><input type="text" name="rollno" placeholder="Enter Rollno." required></td>
                </tr>
                <tr>
                    <td align = 'center'>Full Name</td>
                    <td><input type="text" name="name" placeholder="Enter Full Name" required></td>
                </tr>
                <tr>
                    <td align = 'center'>City</td>
                    <td><input type = "text" name = "city" placeholder = "Enter city"></td>
                </tr>
                <tr>
                    <td align = 'center'>Parents Contact No.</td>
                    <td><input type="text" name="pcon" placeholder="Enter the contact of Parents" required></td>
                </tr>
                <tr>
                    <td align = 'center'>Standard</td>
                    <td><input type="number" name="std" placeholder="Enter standard" required></td>
                </tr>
                <tr>
                    <td align = 'center'>Image</td>
                    <td><input type="file" name="simg" value = "Browse..." required></td>
                </tr>

                <tr>
                    <td colspan = "2" align = "center">
                        <input type = "submit" name = "submit" value = "Submit">
                    </td>
                </tr>
            </table>
        </form>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        include('../dbcon.php');
        $rollno = $_POST['rollno'];
        $name = $_POST['name'];
        $city =$_POST['city'] ;
        $pcon = $_POST['pcon'];
        $std = $_POST['std'];
        $imagename = $_FILES['simg']['name'];
        $tempname = $_FILES['simg']['tmp_name'];
        
        move_uploaded_file($tempname, "../dataimg/$imagename");
        $qry = "INSERT INTO student( rollno, name, city, pcont, standard, image)
                VALUES( '$rollno', '$name', '$city', '$pcon', '$std', '$imagename' )";
        $run = mysqli_query($con, $qry);
        if($run == true){
?>
            <script>
                alert("Data Inserted Successfully");
            </script>
            <?php
        }
    }
?>