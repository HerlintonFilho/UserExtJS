<?php
    include('../db.php');

    $info = $_POST['users'];

    $data = json_decode(stripslashes($info));

    $name = $data->name;
    $email = $data->email;

    $query = sprintf("INSERT INTO user (name, email) values('%s', '%s')",
    mysqli_real_escape_string($conexao,$name),
    mysqli_real_escape_string($conexao, $email));

    $rs = mysqli_query($conexao,$query);

    echo json_encode(array(
        "success" => mysqli_errno($conexao) == 0,
        "users" => array(
            "name" => $name,
            "email" => $email
        ) 
        ));
?>