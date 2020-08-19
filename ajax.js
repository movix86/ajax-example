function ejecutarAJAX(letras){

    /* 
    PASO1) Valore readyState
    0 no ha sido inicializada
    1 peticion establecida
    2 enviada
    3 procesada
    4 finalizada

    Valor Status
    var.status = 200 peticion exitosa
    */
    /*
    PASO2) ajaxRequest.open("METODO RECIBIR DATOS (GET)","DE DONDE?(PHP, TXT)",AINCRONO (TRUE));

    PASO3) jaxRequest.send();
    */
    if (letras != "") {
        //alert(letras);
        var ajaxRequest = new XMLHttpRequest();
        ajaxRequest.onreadystatechange = function(){
            if (ajaxRequest.readyState == 4 && this.status == 200) {
                document.getElementById("info").innerHTML = ajaxRequest.responseText;
            }
        };

        ajaxRequest.open("GET", "json.php?busqueda="+letras, true);
        ajaxRequest.send();

    }else{
        document.getElementById("info").innerHTML = "Nada";
        return;
    }
}