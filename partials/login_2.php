<?php

$usuario = $_POST['usuario'];
$password = $_POST['password'];


include 'conexion.php';
try {
    //se realiza la consulta
    $stmt = $conn->prepare("SELECT id_emp,usuario,nombrec,tipo FROM empleados WHERE usuario = '$usuario'AND pwd= MD5('$password')");
    $stmt->execute();

    //loguear el usuario

    $stmt->bind_result($db_id,$db_usuario,$db_nombre,$db_tipo);
    $stmt->fetch();
    if ($db_usuario) {
        $arreglo = array(
            'response'=>'dos',
            'usuario'=>$db_usuario,
            'nombre'=>$db_nombre
        );

        //creamos avariables de session

        @session_start();

        $_SESSION["id_emp"]=$db_id;
        $_SESSION["tipo"]=$db_tipo;


    }else{
        $arreglo = array(
            'response'=>'valor',
            'usuario'=>$db_usuario,
            'nombre'=>$db_nombre
        );
        
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