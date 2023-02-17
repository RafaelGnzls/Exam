<?php
  include('conn.php');

  $id = $_GET['id'];

  // execute query
  $query = "DELETE FROM content WHERE id=$id";
  mysqli_query($con, $query);

  // return to index.php after running the script 
  header('location: post.php');

  // close connection
  mysqli_close($con);
?>