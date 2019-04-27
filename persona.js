function inicio() {
	lista();
}

function lista() {
	$.ajax({
		type: "POST",
		url: "lista.php",
		data: "",
		success: function (response) {
			//console.log(response);
			$("#tabla1").html(response);
		}
	});
}

function guardar(){
	var id = $("#idpersona").val();
	if(id>0){
		actualizar();
	}else{
		insertar();
	}
}

function insertar() {
	var nom = $("#txtnombres").val();
	var ape = $("#txtape").val();
	var correo = $("#txtcorreo").val();
	$.ajax({
		type: "POST",
		url: "guardar.php",
		data: { "nombres": nom, "apellidos": ape, "correo": correo },
		success: function (response) {
			console.log(response);
			if (response == 0) {
				lista();
				$("#formulario").modal('toggle');
				limpiar();
			} else {
				alert("Error al registrar los datos!");
			}
		}
	});

}

function limpiar() {
	$("#idpersona").val('');
	$("#txtnombres").val('');
	$("#txtape").val('');
	$("#txtcorreo").val('');
}

function eliminar(id) {
	$.ajax({
		type: "POST",
		url: "eliminar.php",
		data: { "id_persona": id },
		success: function (response) {
			console.log(response);
			if (response == 0) {
				lista();
			} else {
				alert("Error al eliminar el registro");
			}
		}
	});
}

function editar(id) {

	$.ajax({
		type: "POST",
		url: "editar.php",
		data: { "id_persona": id },
		success: function (response) {
			console.log(response);
			var data = JSON.parse(response);
			$("#idpersona").val(id);
			$("#txtnombres").val(data.nombres);
			$("#txtape").val(data.apellidos);
			$("#txtcorreo").val(data.correo);
			$("#formulario").modal('toggle');
		}
	});

}

function actualizar(){
	var id = $("#idpersona").val();
	var nom = $("#txtnombres").val();
	var ape = $("#txtape").val();
	var correo = $("#txtcorreo").val();
	$.ajax({
		type: "POST",
		url: "actualizar.php",
		data: {"id_persona":id, "nombres": nom, "apellidos": ape, "correo": correo },
		success: function (response) {
			console.log(response);
			if (response == 0) {
				lista();
				$("#formulario").modal('toggle');
				limpiar();
			} else {
				alert("Error al actualizar los datos!");
			}
		}
	});
}