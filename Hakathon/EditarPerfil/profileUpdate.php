<?php
    require('db_connection.php');

    $password_ = $_POST['password_'];

    # Preparar query para atualizar registro no banco
    $sql = "UPDATE users
            SET password_ = '$password_',
            WHERE id_user = $id_user;";

    # Executar query
    $conn->query($sql);

    # Redirecionar para página de exibição
    header('Location:index.php');
