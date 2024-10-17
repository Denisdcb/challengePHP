<?php
    session_start();
    if(!empty($_SESSION['login']))
    {
        session_destroy();
        unset($_SESSION);
        header("refresh: 3, challenge10_login.php");
    }
    else
    {
        header("location: challenge10_login.php");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Logout</title>
</head>
<body>
    <h2>Vous aller être déconnecter, retour à la page de login</h2>
</body>
</html>