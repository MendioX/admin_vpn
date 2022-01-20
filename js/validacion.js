function ir(){
    var  pw="Rosales191*";
    var user = "soporte";

    if (document.form.password.value == pw && document.form.usuario.value == user){

        alert("Successful connection. Bienvenido Crack de soporte");
        window.location="menu.html";
        
    }else{

        alert("¡Los datos Ingresados Son incorrectos!")
    }
}