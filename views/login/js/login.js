/*$('#btn_ingresar').click(function () {
    $.ajax({
        url: "../../modelo/login.php", success: function (result) {
            console.log(result);
        }
    });
    console.log("llega aqui");
    jQuery.ajax({
        url: "../../modelo/login.php",
        type: 'post',
        data: { "funcion": "funcion1"},
        success: function (respuesta) {
            console.log(respuesta);
            console.log("Completo");
        }
    });
});
/*$('#btn_ingresar').click(function () {
        console.log("mostrar");
        $('#txt_sede').show();
        $('#txt_sede').css("display", "block");
        
});*/

/*$('#btn_ingresar').on('click', function(e) {
    console.log("mostrar");
    $('#txt_sede').show();
})*/
/*let data;
let arr;
document.getElementById("nick").addEventListener("keyup", function () {

    if (this.value != null) { //Condición
        jQuery.ajax({
            url: "../../modelo/login.php",
            type: 'post',
            data: {
                "funcion": "funcion1",
                "nick": this.value
            },
            success: function (respuesta) {
                respuesta => respuesta;
                data = respuesta.split('[').join('');
                data = data.split(']').join('');
                arr = data.split(',');
                console.log(data);
                $(function () {
                    var sede = arr[1];
                    $('#txt_sede').show();
                    $("#txt_sede").val(sede);
                });
            }
        });
        //alert(data);
        /*var nick=data[0];
        data.map((padre) => {
            console.log(padre)
            arregloHijo.map((hijo) => {
              console.log(hijo)
              })
          })*/

/*9
    } else {
        clearInterval(interval); //El intervalo parará de repetirse cuando el valor no sea /time
    }
});*/