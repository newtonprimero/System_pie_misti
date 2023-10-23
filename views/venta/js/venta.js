$(document).on('change', '#comprobante', function(event) {
    var comprobante = $("#comprobante").val();
    var el = $("#comprobante");
    if (comprobante === "boleta") {
        $("#_fielfactura").hide();
        $("#_fielboleta").show();
        $("#val_compro").hide();
        el.css({"border": "", "color": ""});
        $('#next_1').prop("disabled", false);
    } else if (comprobante === "factura" || probante ==="orden") {
        $("#_fielboleta").hide();
        $("#_fielfactura").show();
        $("#val_compro").hide();
        el.css({"border": "", "color": ""});
        $('#next_1').prop("disabled", false);
    } else {
        $("#val_compro").show();
        el.css({"border-color": "red", "color": "red"});
        $('#next_1').prop("disabled", true);
    }
});

$(document).on('change', '#tip_pago', function(event) {
    var comprobante="";
    comprobante=document.getElementById("tip_pago");
    var el = document.getElementById("tip_pago");
    if (comprobante.value=="efectivo") {
        $("#tipo_targeta").hide();
        $("#tipo_efectivo").show();
        el.setAttribute("style", "width: 200px;");
        $('#next_4').removeAttr("disabled");
    } else if (comprobante.value=="targeta") {
        $("#tipo_efectivo").hide();
        $("#tipo_targeta").show();
        el.setAttribute("style", "width: 200px;");
        $('#next_4').removeAttr("disabled");
    } else{
        $("#tipo_efectivo").hide();
        el.setAttribute("style", "border-color: red; color: red; width: 200px;");
        $("#tipo_targeta").hide();
        $('#next_4').attr('disabled', 'disabled');
    }
});
dni.oninput = function() {
    var dniValue = document.getElementById("dni").value;

    if (dniValue !== "") {
        // Define la URL del controlador PHP
        var url = "http://localhost/pie_misti_1/controllers/clientes.php?action=consultarDNI";

        // Define los datos que deseas enviar al controlador
        var data = {
            dni: dniValue
        };

        // Realiza una solicitud AJAX utilizando fetch
        fetch(url, {
            method: "POST",
            body: JSON.stringify(data),
            headers: {
                "Content-Type": "application/json"
            }
        })
        .then(function(response) {
            if (response.status !== 200) {
                console.log("Hubo un problema con la solicitud. Código de estado: " + response.status);
                return data;
            }

            // Procesa la respuesta del controlador PHP
            response.json()
            .then(function(data) {
                console.log("Respuesta del controlador PHP:", data);
                if (data.success) {
                    // Si la consulta fue exitosa, muestra los nombres y apellidos en el div
                    var nombres = data.nombres;
                    var apellidos = data.apellidoPaterno + " " + data.apellidoMaterno;
            
                    // Actualiza el contenido del div
                    var input = document.getElementById("nombre_apel");

                    input.value = data.nombres + " " + apellidos;
                    //document.getElementById("nombre_apel").textContent = nombres + " " + apellidos;
            
                    // Muestra el div
                    $("#nomb_apel").show();
                } else {
                    // Maneja el caso en el que la consulta no fue exitosa
                    // Puedes mostrar un mensaje de error, ocultar el div, etc.
                }

                // Aquí puedes realizar más acciones con los datos recibidos, como actualizar la interfaz de usuario, etc.
            });
        })
        .catch(function(error) {
            console.log("Hubo un error al realizar la solicitud:", error);
        });

    } else {
        $("#nomb_apel").hide();
    }
};


  ruc.oninput = function() {
    if (document.getElementById("ruc").value!="") {
        var rucValue = document.getElementById("ruc").value;
        // Define la URL del controlador PHP
        var url = "http://localhost/pie_misti_1/controllers/clientes.php?action=consultarRUC";

        // Define los datos que deseas enviar al controlador
        var data = {
            ruc: rucValue
        };

        // Realiza una solicitud AJAX utilizando fetch
        fetch(url, {
            method: "POST",
            body: JSON.stringify(data),
            headers: {
                "Content-Type": "application/json"
            }
        })
        .then(function(response) {
            if (response.status !== 200) {
                console.log("Hubo un problema con la solicitud. Código de estado: " + response.status);
                return data;
            }

            // Procesa la respuesta del controlador PHP
            response.json()
            .then(function(data) {
                console.log("Respuesta del controlador PHP:", data);
                if (data) {
                    // Si la consulta fue exitosa, muestra los nombres y apellidos en el div
                    console.log("llega aca:");
                    
                    //var apellidos = data.apellidoPaterno + " " + data.apellidoMaterno;
            
                    // Actualiza el contenido del div
                    //document.getElementById("nombre_apel").textContent = nombres + " " + apellidos;

                    var input = document.getElementById("nom_empre");
                    var input2=document.getElementById("direccion");

                    console.log(data.razonSocial);
                    input.value = data.razonSocial;
                    input2.value = data.direccion;
                    //document.getElementById("nom_empre").textContent = nombres;

                    //document.getElementById("direccion").textContent = direccion;
            
                    // Muestra el div
                    //$("#nomb_apel").show();
                    if (data.razonSocial===undefined) {
                        $('#next_2').prop("disabled", true);
                    }else{$('#next_2').prop("disabled", false);}
                    
                } else {
                    // Maneja el caso en el que la consulta no fue exitosa
                    // Puedes mostrar un mensaje de error, ocultar el div, etc.
                }

                // Aquí puedes realizar más acciones con los datos recibidos, como actualizar la interfaz de usuario, etc.
            });
        })
        .catch(function(error) {
            console.log("Hubo un error al realizar la solicitud:", error);
        });

        $("#ruc_info").show();
    }else {
        $("#ruc_info").hide();
    }
    
  };

  pro_name.oninput = function() {
    if (document.getElementById("pro_name").value!="") {
        $("#card_venta").show();
    }else {
        $("#card_venta").hide();
    }
    
  };
