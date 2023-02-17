<?php 
    include('conn.php');

    
    if(isset($_POST['save'])){

        $username         = $_POST['Username'];
        $email            = $_POST['Email'];
        $password         = $_POST['Password'];
        $confirmpass      = $_POST['Confirmpass'];
        if($password == $confirmpass){
            $query = "INSERT INTO logsystem VALUES ('$username','$email','$password', '$confirmpass')";
            mysqli_query($con,$query);
        }
    }
    
   header('location: index.php');
    
    

    mysqli_close($con);
    
?>