<?php
    include('conn.php');

    // get id by GET data
    $id = $_GET['id'];

    // get post data
    $title = $_POST['title'];
    $content= $_POST['content'];
    
        $query= "UPDATE product SET name='$name', description='$desc', price='$price', cat_id=$category WHERE id=$id";
        mysqli_query($con, $query);
    
    // return to index.php after running the script 
     header('location: adminpanel.php');

    // close connection
    mysqli_close($con);
?>