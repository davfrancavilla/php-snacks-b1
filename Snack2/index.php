<?php
    $name = $_GET["name"];
    $email = $_GET["email"];
    $age = $_GET["age"];

    if ((strlen($name) > 3) and (strpos($email, '@') != false and strpos($email, '.') != false) and (is_numeric($age))){
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    }
?>