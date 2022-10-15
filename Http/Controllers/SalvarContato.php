<?php

namespace Http\Controllers;

use Http\Models\Contato;

$valid = true;
foreach ($_POST as $key => $param) {
    if (trim($_POST[$key]) == null) {
        $valid = false;
    }
}


if ($valid) {
    $contato = new Contato(
        $_POST['nome'],
        $_POST['idade'],
        $_POST['sexo'],
        $_POST['telefone']
    );

    $contato->save();
}

header('location: ../../resources/views/index.php');
