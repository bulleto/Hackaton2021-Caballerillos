<?php

$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$password = $_POST['password'];
$urgencia = $_POST['urgencia'];
$historial = $_POST['historial'];
$foto = $_POST['foto'];



include 'conexion.php';

try {
    //se realiza la consulta
    $stmt = $conn->prepare("SELECT id,usuario,nombre FROM usuarios WHERE usuario = '$usuario'");
    $stmt->execute();

    //loguear el usuario

    $stmt->bind_result($db_id,$db_usuario,$db_nombre);
    $stmt->fetch();
    if ($db_usuario) {
        $arreglo = array(
            'response'=>'dos',
            'usuario'=>$db_usuario,
            'nombre'=>$db_nombre
        );
    }else{
        $inserta = $conn->prepare("INSERT INTO usuarios (id,usuario,nombre,apellidos,password,foto,urgencias,historial) VALUES ('','$usuario','$nombre','$apellidos',md5('$password'),'$foto','$urgencia','$historial')");
        $inserta->execute();

        if($inserta->affected_rows){
            $arreglo = array(
                'response' => 'sinresultados',
                'id_isertado' => $inserta->insert_id
            );

        }
        
    }    
    $stmt->close();
    $conn->close();
        


    

  

    

} catch (Exception $e) {
    //se produce un error;
    $arreglo = array(
        'error' => $e->getMessage()
    );
}




/*$arreglo = array(
    'respuesta' => $usuario
);*/

die(json_encode($arreglo));
?>