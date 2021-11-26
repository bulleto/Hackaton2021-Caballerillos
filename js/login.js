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

        }
    }
    cracks.send(datos);

}
