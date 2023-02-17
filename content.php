<?php 
    include('conn.php');

    
    if(isset($_POST['save'])){

        $title              = $_POST['title'];
        $content            = $_POST['content'];
        $query = "INSERT INTO content (Title,Content) VALUES ('$title ','$content ')";
        mysqli_query($con,$query);
        }
    
    
   header('location: post.php');
    
    

    mysqli_close($con);
    
?>