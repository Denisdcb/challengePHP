<?php
    session_start();
    if(empty($_SESSION['login']))
    {
        header('location: challenge10_login.php');
    }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Panier</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link " href="/challenge10/challenge10_index.php">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/challenge10/challenge10_cart.php">Panier</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/challenge10/challenge10_logout.php">Deconnection</a>
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
        <?php  
            if(isset($_SESSION['panier']))
            { ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2>Votre panier :</h2>
                        </div>
                        <?php 
                        foreach($_SESSION['panier'] as $key => $value)
                        { ?>
                            <div class="col-7 border border-bottom-0 border-dark">
                                <h3>Désignation produit : <?php echo $key ?></h3>
                            </div>
                            <div class="col-5 border border-bottom-0 border-dark d-flex justify-content-end">
                                <img class="img-fluid rounded-3" src="<?php echo 'img_challenge10/'.$key.'.jpg'?>">
                            </div>
                            <div class="col-7 border border-top-0 border-dark">
                                <h3>Quantité : <?php echo count($_SESSION['panier'][$key]) ?></h3>
                            </div>
                            <div class="col-5 border border-top-0 border-dark d-flex justify-content-end">
                                <a class="my-1 me-5 btn btn-danger" href="?removecart=<?php echo $key;?>">Supprimer du panier</a>
                            </div>
                        <?php }
                        ?>
                    </div>
                </div>

            <?php }
            else
            {
                echo "Vous n'avez aucun articles dans votre panier..";
            }
            if(isset($_GET['removecart']))
            {
                unset($_SESSION['panier'][$_GET['removecart']]);
                header('refresh:0; url=challenge10_cart.php');
                if(empty($_SESSION['panier']))
                {
                    unset($_SESSION['panier']);
                }
            } 
            ?>
    </main>  
</body>
</html>