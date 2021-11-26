<?php


if(isset($_GET['id'])) {
    include_once 'conexion.php';
    $encoded_id = $_GET['id'];
    $decode_id = base64_decode($encoded_id);
    $user_id_array = explode("encodeuserid", $decode_id);
    $id = $user_id_array[1];

    try {

        //se realiza la consulta
        $stmt = $conn->prepare("SELECT usuario,nombre,apellidos,foto,urgencias,historial FROM usuarios WHERE id='$id'");
        $stmt->execute();

        //loguear el usuario

        $stmt->bind_result($db_usuario,$db_nombre,$db_apellidos,$db_foto,$db_urgencias,$db_historial);
        $stmt->fetch();


$stmt->close();
    $conn->close();

    } catch (Exception $e) {
        //se produce un error;
        $arreglo = array(
            'error' => $e->getMessage()
        );
    }
}

?>
