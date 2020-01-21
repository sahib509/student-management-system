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

<form method="POST" action="updatestudent.php">
            <table border="2" align="center" style="width: 30%; margin-top: 10px">
                <tr>
                    <th>Standard</th>
                    <td><input type="number" name="standard" placeholder="Enter standard" required>
                    </td>
                </tr>
                <tr>
                    <th>Student Name</th>
                    <td><input type="text" name="stuname" placeholder="Enter student name" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align = "center"><input type="submit" name="submit" value = "search"></td c>
                </tr>

            </table>
        </form>


<table align = "center" border = "2" style = "width:70%">
    <tr style = "background-color:black; color:#fff">
        <th>No</th>
        <th>Image</th>
        <th>Name</th>
        <th>Rollno</th>
        <th>Edit</th>
    </tr>

    
    <?php
    if(isset($_POST['submit'])){
        include('../dbcon.php');

        $standard = $_POST['standard'];
        $stuname = $_POST['stuname'];
        $qry = "SELECT * FROM student 
                WHERE standard = '$standard' AND name like '%$stuname%'";
        
        $run = mysqli_query($con, $qry);
        if(mysqli_num_rows($run) < 1) {
            echo"<tr><td colspan = '5'>No records found</td></tr>";
        }

        else {
            $count = 0;
            while($data = mysqli_fetch_array($run)){
                $count ++;
                ?>
                <tr>
                    <td><?php echo $count;?></td>
                    <td><img style = "width:40px; height:40px" src = ../dataimg/<?php echo $data['image']; ?>></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['rollno']; ?></td>
                    <td><a href = "updateform.php?sid=<?php echo $data['id'];?>">edit</a></td>    
                </tr>
                <?php
            }
        }


    }
    ?>
         
    </table>
</body>
</html>

