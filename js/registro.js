console.log("Conectado a js soy un dios.....");

//generamos el escuchador (desencadenador) y su funcion

console.log("conectado a javaScript");

document.querySelector("#register").addEventListener("submit",enviar);

function enviar(e){
    e.preventDefault();

    console.log("haz dado clic");

    var usuario = document.querySelector("#usuario").value,
        nombre = document.querySelector("#nombre").value,
        apellidos = document.querySelector("#apellidos").value,
        password = document.querySelector("#pass").value,
        foto = document.querySelector("#foto").value,
        emergencia = document.querySelector("#emergencia").value,
        historial = document.querySelector("#historial").value;

    if(usuario ==='' || nombre === ''|| apellidos === ''|| password === ''|| emergencia === ''|| historial === ''){
        Swal.fire(
            'OUPS!',
            'Los campos estan vacios',
            'error'
        )
    }else{
        //console.log(nombre);

        let entrar = true;
        if(entrar == true){
            // -> console.log("exito")
            //creamos el objeto de datos que enviaremos por medio de ajax
            var info = new FormData();
            //agregamos los valores al objeto con append y una llave
            info.append('usuario',usuario);
            info.append('nombre',nombre);
            info.append('apellidos',apellidos);
            info.append('password',password);
            info.append('foto',foto);
            info.append('urgencia',emergencia);
            info.append('historial',historial);

            var backend = new XMLHttpRequest();
            backend.open('POST','partials/registro_back.php',true);

            backend.onload = function(){
                if(this.status===200){
                    var respuesta = JSON.parse(backend.responseText);
                    console.log(respuesta);

                    if (respuesta['response']==='dos') {
                        Swal.fire(
                            'Usuario ya Existente!',
                            'Intenta con otro usuario',
                            'error'
                        );
                         
                    }else{
                        Swal.fire(
                            'Acción Exitosa!',
                            'Usuario Registrado',
                            'success'
                        );
                        setTimeout(function(){
                            location.reload();
                        }, 2000); 
                    }
                }else{
                    Swal.fire(
                        'Error de Conexion!',
                        'Contactanos',
                        'error'
                    );
                }
            }
            backend.send(info);

        }else{
            console.log("error");
        }

    }
        
}