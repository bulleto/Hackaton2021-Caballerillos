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

        var datos = FormData();
        datos.append('usuario',usuario);
        datos.append('nombre',nombre);
        datos.append('password',password);
        datos.append('tipo',tipo);

        //creamos un objeto ajax
        var cracks = new XMLHttpRequest();

        cracks.open('POST','partials/medicos_back.php',true);

        cracks.onload = function(){
            if(this.status===200){

            }
        }
        cracks.send(datos);



    }

}