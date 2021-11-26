<?php

$usuario=$_POST['usuario'];
$password=$_POST['password'];


include 'conexion.php';
try {
    //se realiza la consulta
    $stmt = $conn->prepare("SELECT id_emp,usuario,nombrec FROM empleados WHERE usuario = '$usuario'and pass='$password'");
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