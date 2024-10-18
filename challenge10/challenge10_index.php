<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Acceuil</title>
</head>
<body>
<header>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link " href="#">Acceuil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/challenge10/challenge10_cart.php">Panier</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/challenge10/challenge10_logout.php">Deconnection</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/challenge10/challenge10_login.php">
                    <?php
                        if(empty($_SESSION['login']))
                        {
                            echo "Connection";
                        }
                    ?>
                </a>
            </li>
        </ul>
        <span class="navbar-text position-absolute top-0 end-0 px-1">
        <?php if(!empty($_SESSION['login']))
                {
            echo "<h3>Bienvenue : " . ucfirst($_SESSION['login']) . "</h3>";
        }
        ?>
        </span>
    </div>
    </nav>
</header>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 d-flex flex-column">
                <img src="/challenge10/img_challenge10/Shakespeare Histoires II.jpg" >
                <a class="btn btn-dark my-1 w-25 align-self-center" href="?addcart=Shakespeare Histoires II">Ajouter au Panier</a>
            </div>
            <div class="col-4 d-flex flex-column">
                <img src="/challenge10/img_challenge10/Shakespeare Macbeth.jpg" >
                <a class="btn btn-dark my-1 w-25 align-self-center" href="?addcart=Shakespeare Macbeth">Ajouter au Panier</a>
            </div>
            <div class="col-4 d-flex flex-column">
                <img src="/challenge10/img_challenge10/Shakespeare Oeuvres Completes.jpg" >
                <a class="btn btn-dark my-1 w-25 align-self-center" href="?addcart=Shakespeare Oeuvres Completes">Ajouter au Panier</a>
            </div>
        </div>
    </div>
</main>
</body>
</html>
<?php
    if(isset($_GET['addcart']))
    {
        $_SESSION['panier'][$_GET['addcart']][] = $_GET['addcart'];
        header('refresh:0; url=challenge10_index.php');
    }
    echo var_dump($_GET);
?>        
