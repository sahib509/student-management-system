<?php
     session_start();
     if(isset($_SESSION['uid'])){
         header('location:admin/admindash.php');
     }
    
?>


<html>
    <head>
        <title>Admin Login</title>
    </head>
    <body background-color = "red">
        <h1 align = "center">Admin login</h1>
        <form action="login.php" method="POST">
            <table style = "" border = "2" align = "center">                              
                <tr>
                    <td>Username</td>
                    <td><input typ  e="text" name="uname" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name = "pass" required></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="login" name="login"></td>
                </tr>
            </table>  
        </form>    
    </body>
</html>
<?php
    include('dbcon.php');
    if(isset($_POST['login'])){
        $username = $_POST['uname'];
        $password = $_POST['pass'];

        $qry = "SELECT * FROM admin WHERE username = '$username' AND password = '$password' ";
        $run = mysqli_query($con, $qry);
        $row = mysqli_num_rows($run);
        if($row < 1){
 ?>
            <script>
                alert(' Invalid username or password');
                window.open('login.php', '_self');
            </script>
<?php                   
        }

        else{
            $data = mysqli_fetch_assoc($run);
            $id = $data['id'];

            echo"id = ".$id;

           
            $_SESSION['uid'] = $id;
            header('location:admin/admindash.php');
        }
    }

?>