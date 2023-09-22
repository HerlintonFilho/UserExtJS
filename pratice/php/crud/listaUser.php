<?php 
    include('db.php');

    $query = mysqli_query($conexao,"SELECT * FROM user") or die (mysqli_error($conexao));

    $rows = array('users' => array());

    while($user = mysqli_fetch_assoc($query)){
        $rows['users'][] = $user;
    }

    echo json_encode($rows);
?>