<?php
    #On démarre la session
    session_start();
    #Si une variable de session message existe
    if(isset($_SESSION['message'])) {
        #On défini une variable temporaire à la variable de session et on réinitialise celle ci
        $message = $_SESSION['message'];
        $_SESSION['message'] = '';
    }
    else {
        #On réinitialise les 2 variables
        $message = '';
        $_SESSION['message'] = '';
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Minecraft username checker</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    </head>
    <body>
        <center>
            <br><br><br><br>
            <h2>Minecraft username checker</h2>
            <form method="post" action="check.php">
                <input type="text" id="username" name="username" placeholder="Entrez un pseudo..." required>
                <br><br>
                <button type="submit">Vérifier</button>
                <br><br>
                <?php
                    #On affiche le message d'alerte
                    echo $message;
                ?>
            <form>    
        </center>
    </body>
</html>