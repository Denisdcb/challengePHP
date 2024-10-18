<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form action="challenge10_login.php" method="post">
        <div class="col-6 p-2">
            <label for="username" class="form-label">User</label>
            <input type="text" id="username" name="user_username" class="form-control" placeholder="Username">
        </div>
        <div class="col-7 p-2">
            <button type="submit" class="btn btn-primary">Connect</button>
        </div>
    </form>
</body>
</html>
<?php
    session_start();
    $_SESSION['login'] = $_POST['user_username'];
    if(!empty($_SESSION['login']))
    {
        header('location: challenge10_index.php');
    }
?>