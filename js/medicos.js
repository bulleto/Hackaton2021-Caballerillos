console.log("conectado a js");

document.querySelector("#register_med").addEventListener("submit",rockstars);

function rockstars(e){

    e.preventDefault();
    console.log("haz echo click");

    var usuario = document.querySelector("#usuario").value,
    nombre = document.querySelector("#nombre").value,
    password = document.querySelector("#pass").value,
    tipo = document.querySelector("#tipo").value;

    if(usuario ==='' || nombre === ''|| password === ''|| tipo === ''){
        Swal.fire(
            'OUPS!',
            'Los campos estan vacios',
            'error'
        )
    }else{

        var datos = new FormData();
        datos.append('usuario',usuario);
        datos.append('nombre',nombre);
        datos.append('password',password);
        datos.append('tipo',tipo);

        //creamos un objeto ajax
        var cracks = new XMLHttpRequest();

        cracks.open('POST','partials/medicos_back.php',true);

        cracks.onload = function(){
            if(this.status===200){
                var respuesta = JSON.parse(cracks.responseText);
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
        cracks.send(datos);



    }

}