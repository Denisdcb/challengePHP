<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge8-PHP</title>   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form action="challenge8-thanks.php" method="post" class="row mb-3 container">
        <div class="col-6 p-2">
            <label for="lastname" class="form-label">Nom</label>
            <input type="text" id="lastname" name="user_lastname" class="form-control" placeholder="Entrez votre nom">
        </div>
        <div class="col-6 p-2">
            <label for="firstname" class="form-label">Prénom</label>
            <input type="text" id="firstname" name="user_firstname" class="form-control" placeholder="Entrez votre Prénom" required>
        </div>
        <div class="col-6 p-2">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" id="email" name="user_email" class="form-control" placeholder="Entrez votre e-mail" required>
        </div>
        <div class="col-6 p-2">
            <label for="tel" class="form-label">N°Tél</label>
            <input type="tel" id="tel" name="user_tel" class="form-control" minlength="10" maxlength="10" placeholder="Entrez votre N°Tel au format 0102030405" pattern="[0-9]{10}" required>
        </div>
        <div class="col-3 p-2">
            <label for="message_type">Choisir un sujet</label>
            <select name="user_messagetype" id="message_type" class="form-select" required>
                <option value="">Sujet..</option>
                <option value="php">PHP > JS</option>
                <option value="js">JS > PHP</option>
            </select>
        </div>
        <div class="col-12 p-2">
            <label for="message" class="form-label">Votre message :</label>
            <textarea id="message" name="user_message" class="form-control" placeholder="Entrez votre message" required></textarea>
        </div>
        <div class="col-1 p-1">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
        <div class="col-1 p-1">
            <button type="reset" class="btn btn-warning">Effacer</button>
        </div>
    </form>
</body>
</html>


