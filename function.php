<?php
    function showdetails($s, $r){
        include('dbcon.php');

        $sql = "SELECT * FROM student
                WHERE rollno = '$r'
                AND standard = '$s';";

        $run = mysqli_query($con, $sql);

        if(mysqli_num_rows($run) > 0){
            $data = mysqli_fetch_assoc($run);
?>      
        <table border = '2' align = 'center' width = '50%' style = " margin-top = 10px; color: #fff; background-color: #ff9900">
            <tr>
                <th colspan="3">Student Details</th>
            </tr>
            <tr>
                <td rowspan="5"> <img src="dataimg/<?php echo $data['image']; ?>" style="max-height: 100px; padding-left: 30px; max-width: 100px display:block;"></td>
                <th>Roll no</th><td><?php echo $data['rollno'];?></td>
            </tr> 

            <tr>
                <th>Name</th><td><?php echo $data['name'];?></td>
            </tr> 

            <tr>
                <th>standard</th><td><?php echo $data['standard'];?></td>
            </tr> 

            <tr>
                <th>Parents ccontact no</th><td><?php echo $data['pcont'];?></td>
            </tr> 

            <tr>
                <th>City</th><td><?php echo $data['city'];?></td>
            </tr> 
            
            
        </table>
<?php
        }
        else{
            echo"<script>alert('NO STUDENT FOUND');</SCRIPT>";
        }
    }
?>