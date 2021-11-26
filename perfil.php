<?php
include_once 'partials/conexion.php';

if(isset($_GET['id'])) {

    $encoded_id = $_GET['id'];
    $decode_id = base64_decode($encoded_id);
    $user_id_array = explode("encodeuserid", $decode_id);
    $id = $user_id_array[1];

    $sql = "UPDATE users SET activated =:activated WHERE id=:id AND activated='0'";

    $statement = $db->prepare($sql);
    $statement->execute(array(':activated' => "1", ':id' => $id));

    if ($statement->rowCount() == 1) {
        $result = '<h2>Email confirmado </h2>
        <p>Tu email se ha verificado, ahora puedes <a href="login.php">Acceder</a> con tu usuario y contraseña.</p>';
    } else {
        $result = "<p class='lead'>No se requiere verificar,
    contacta al Admin del sitio en caso de que tu no hayas verificado el correro</p>";
    }
}

?>