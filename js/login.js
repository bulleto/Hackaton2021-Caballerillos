console.log("Conectado a js y base");

document.querySelector("#login").addEventListener("submit", dani);

function dani(e){

    e.preventDefault();
    console.log("Haz echo clic");

    var usuario = document.querySelector("usuario").value,
    password = document.querySelector("password").value;

    var datos = FormData();
    datos.append('usuario',usuario);
    datos.append('password',password);

    //objeto ajax
    var cracks = new XMLHttpRequest();
    
    cracks.open('POST','partials/login_2.php',true);
    cracks.onload = function(){
        if(this.status===200){
            var respuesta = JSON.parse(backend.responseText);
                    console.log(respuesta);

                    if (respuesta['response']==='dos') {
                        Swal.fire(
                            'Login correcto!',
                            'Bienvenido :D',
                            'Success'
                        );
                         
                    }else{
                        Swal.fire(
                            'Login incorrecto!',
                            'usuario incorrecto',
                            'error'
                        );
                        setTimeout(function(){
                            location.reload();
                        }, 2000); 
                    }

        }
    }
    cracks.send(datos);

}
