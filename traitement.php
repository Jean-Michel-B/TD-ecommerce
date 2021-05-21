
<?php
if(!empty($_POST['send'])):

    if(empty($_POST["firstname"]) OR empty($_POST["email"])):
         die('Les champs email et prénom sont obligatoires');
    else :
        $_POST['firstname'] = ucwords($_POST['firstname']);
        $_POST['name'] = strtoupper($_POST['name']);
    endif;
else :
    die('erreur');
endif;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement</title>
</head>
<body>
    <p>Félicitation <?php echo $_POST['firstname']; ?> <?php echo $_POST['name']; ?> vous avez à présent à tous les avantages abonnés.</p>
    <p>Votre demande a bien été prise en compte</p>
    <p>Vous les recevrez sur votre adresse email : <?php echo $_POST['email']; ?></p>
</body>
</html>

