<?php
    #On démarre la session
    session_start();
    #On récupère le pseudo entré dans le formulaire
    $username = $_POST['username'];
    #On récupère le contenu de l'api Minetools
    $json = file_get_contents("https://api.minetools.eu/uuid/$username");
    #On décode le json de l'api
    $obj = json_decode($json);
    #On défini le status du compte dans une variable
    $status = $obj->status;
    #Si le compte t'as pas d'uuid
    if($status == "ERR") {
        #On indique dans une variable de session que le pseudo est disponible
        $_SESSION['message'] = "Ce pseudo est disponible :)";
    }
    #Si le compte a un uuid
    else if($status == "OK") {
        #On indique dans une variable de session que le pseudo n'est pas disponible
        $_SESSION['message'] = "Ce pseudo n'est pas disponible :(";
    }
    #On redirige l'utilisateur vers l'index
    header("Location: index.php");
?>