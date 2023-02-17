<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniBlog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
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
    ?>
    <div class="container">
        <h1>Login</h1>
        <hr>
        <div class="form">
        <form action="loginCheck.php" method="POST">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                <label for="floatingInput">Enter Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingInput" placeholder="password" name="password">
                <label for="floatingInput">Enter Password</label>
            </div>
            <button type="submit" class="btn">LOGIN</button>
            <button type="button" class="btn" onclick="location.href='registration.php'">REGISTER</button>
            <h5>Currently logged out.</h5>
            <form action="loginCheck.php" method="POST">
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>