<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniBlog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/post.css">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Roboto:ital,wght@0,100;1,900&family=Rubik+Vinyl&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-right">MiniBlog</a>
            <span class="navbar-text">Login</span>
        </div>
    </nav>
    <?php
        include('conn.php');
        $query = "SELECT * FROM content";
        $result = mysqli_query($con,$query);
    ?>
    <?php
        while($row = mysqli_fetch_array($result))
        {
    ?>
        <div class="container" id="editModal<?= $row['id']?>">
        <div class="content">
            <h1><?php echo $row['Title']?></h1>
            <h2><?php echo $row['Content']?></h2>
            <h2><?php echo $row['date']?></h2>
            <hr>
        </div>
        <form action="delete.php" method="POST">
        <div class="form">
            <a type="button" class="btn btn-danger" href="delete.php?id=<?= $row['id']?>">Delete</a>
            <button type="button" class="btn btn-success" onclick="location.href='update.php'">EDIT</button>
        </div>
        </div>


    <?php
        }
    ?>

    
    <div class="container">
        <button type="button" class="btn btn-primary" onclick="location.href='create.php'">CREATE NEW POST</button>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>