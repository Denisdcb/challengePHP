<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
</head>
<body>
    <p><?php echo "Merci $_POST[user_firstname] $_POST[user_lastname] de nous avoir contacté à propos de $_POST[user_message_type]."?></p> 
    <p><?php echo "Un de nos conseiller vous contactera soit à l'adresse $_POST[user_email] ou par téléphone au $_POST[user_tel] dans les plus brefs délais pour traiter votre demande :"?> </p>
    </p><?php echo "$_POST[user_message]"?></p>
</body>
</html>