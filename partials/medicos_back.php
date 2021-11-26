<?php

$usuario=$_POST['usuario'];
$nombre=$_POST['nombre'];
$password=$_POST['password'];
$tipo=$_POST['tipo'];


include 'conexion.php';

try {
    //se realiza la consulta
    $stmt = $conn->prepare("SELECT id_emp,usuario,nombrec FROM empleados WHERE usuario = '$usuario'");
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
        $inserta = $conn->prepare("INSERT INTO empleados (id_emp,usuario,nombrec,pwd,tipo) VALUES ('','$usuario','$nombre',md5('$password'),'$tipo')");
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
