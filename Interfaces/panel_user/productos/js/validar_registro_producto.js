
$(document).on("ready", inicio);
    

function inicio(){
	
	//oculatar span
	$("span.help_block").hide();
	//validar en tiempo real cada campo
	$("#titulo").keyup(validarTitulo);
	$("#descripcion").keyup(validarDescripcion);
	$("#categoria_id").change(validarCategoria);
	$("#foto").change(validarFoto);
	$("#precio").keyup(validarPrecio);

	//agregar producto
	$("#save").click(Registro);
	//actualizar producto
	$("#actualizar").click(actualizar);

	

}

function validarTitulo(){
	var valor=document.getElementById("titulo").value;
	if (valor==null || valor.length==0 || /^\s+$/.test(valor)) {
		$("#iconoTitulo").remove();
		$("#titulo").parent().attr("class","form-group has-error has-feedback"); 
		$("#titulo").parent().children("span").text("Debe ingresar algún caracter").show();
		$("#titulo").parent().append("<span id='iconoTitulo' class='glyphicon glyphicon-remove form-control-feedback' ></span>")
		
		return false;

	}else if (valor.length>50) {
		$("#iconoTitulo").remove();
		$("#titulo").parent().attr("class","form-group has-error has-feedback"); 
		$("#titulo").parent().children("span").text("50 caracteres como máximo").show();
		$("#titulo").parent().append("<span id='iconoTitulo' class='glyphicon glyphicon-remove form-control-feedback' ></span>")
		
		return false;
	}else{
		$("#iconoTitulo").remove();
		$("#titulo").parent().attr("class","form-group has-success has-feedback"); 
		$("#titulo").parent().children("span").text("").hide();
		$("#titulo").parent().append("<span id='iconoTitulo' class='glyphicon glyphicon-ok form-control-feedback' ></span>")
		return true;
	}
}
function validarDescripcion(){
	
	var descripcion=document.getElementById("descripcion").value;

	if (descripcion==null || descripcion.length==0 || /^\s+$/.test(descripcion)) {
		$("#iconoDescripcion").remove();
		$("#descripcion").parent().attr("class","form-group has-error has-feedback"); 
		$("#descripcion").parent().children("span").text("Debe ingresar algún caracter").show();
		$("#descripcion").parent().append("<span id='iconoDescripcion' class='glyphicon glyphicon-remove form-control-feedback' ></span>")
		
		return false;
	}else if (descripcion.length>60) {
		$("#iconoDescripcion").remove();
		$("#descripcion").parent().attr("class","form-group has-error has-feedback"); 
		$("#descripcion").parent().children("span").text("60 caracteres como máximo").show();
		$("#descripcion").parent().append("<span id='iconoDescripcion' class='glyphicon glyphicon-remove form-control-feedback' ></span>")
		
		return false;
	}else{
		$("#iconoDescripcion").remove();
		$("#descripcion").parent().attr("class","form-group has-success has-feedback"); 
		$("#descripcion").parent().children("span").text("").hide();
		$("#descripcion").parent().append("<span id='iconoDescripcion' class='glyphicon glyphicon-ok form-control-feedback' ></span>")
		return true;
	}
}
function validarCategoria(){
	
	var categoria_id=document.getElementById("categoria_id").selectedIndex;


	if (categoria_id == null || categoria_id == 0 ) {
		$("#categoria_id").parent().attr("class","form-group has-error"); 
		$("#categoria_id").parent().children("span").text("Seleccione una categoría").show();
		return false;
	}else{
		$("#categoria_id").parent().attr("class","form-group has-success"); 
		$("#categoria_id").parent().children("span").text("").hide();
		return true;
	}

}

function validarFoto(){
	
	var foto=document.getElementById("foto");
	var filePath = foto.value;


	var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
	if (!allowedExtensions.exec(filePath)) {
		$("#foto").parent().attr("class","form-group has-error"); 
		$("#foto").parent().children("span").text("Extension no permitida").show();
		foto.value = '';
		return false;
	}else{
		$("#foto").parent().attr("class","form-group has-success"); 
		$("#foto").parent().children("span").text("").hide();
		return true;
	} 
           /* if (foto == null) {
            	$("#foto").parent().attr("class","form-group has-error"); 
            	$("#foto").parent().children("span").text("Seleccione una foto").show();
		return false;
	}else{
		$("#foto").parent().attr("class","form-group has-success"); 
		$("#foto").parent().children("span").text("").hide();
		return true;
	}*/

}
function validarPrecio(){
	var precio=document.getElementById("precio").value;
	if (precio==null || precio.length==0 || /^\s+$/.test(precio)) {
		$("#iconoPrecio").remove();
		$("#precio").parent().attr("class","form-group has-error has-feedback"); 
		$("#precio").parent().children("span").text("Debe ingresar algún caracter").show();
		$("#precio").parent().append("<span id='iconoPrecio' class='glyphicon glyphicon-remove form-control-feedback' ></span>")
		
		return false;
	}else if (precio<=0) {
		$("#iconoPrecio").remove();
		$("#precio").parent().attr("class","form-group has-error has-feedback"); 
		$("#precio").parent().children("span").text("Precio debe ser mayor a cero").show();
		$("#precio").parent().append("<span id='iconoPrecio' class='glyphicon glyphicon-remove form-control-feedback' ></span>")
		return false;
	}else if (isNaN(precio)) {
		$("#iconoPrecio").remove();
		$("#precio").parent().attr("class","form-group has-error has-feedback"); 
		$("#precio").parent().children("span").text("Debe ingresar algún dato numérico").show();
		$("#precio").parent().append("<span id='iconoPrecio' class='glyphicon glyphicon-remove form-control-feedback' ></span>")
		return false;
	}else{
		$("#iconoPrecio").remove();
		$("#precio").parent().attr("class","form-group has-success has-feedback"); 
		$("#precio").parent().children("span").text("").hide();
		$("#precio").parent().append("<span id='iconoPrecio' class='glyphicon glyphicon-ok form-control-feedback' ></span>")
		return true;
	}
}


function Registro(){
	if (validarTitulo() && validarDescripcion() && validarCategoria() && validarFoto() && validarPrecio()) {
		$('#form_registro_producto').submit(function(e){
			e.preventDefault();
			var formData = new FormData(this);
			$.ajax({
				url: "../acciones.php",
				type: "POST",
				data: formData,
				contentType : false,
				processData: false,
				success: function(data){
					Swal.fire({
						icon: 'success',
						title: 'Registrado Correctamente',
						showConfirmButton: false,
						timer: 5500
					});
						//document.getElementById("form_registro_producto").reset();
						location.href = 'index.php';
					}
				});
		});
	}else{
		Swal.fire({
			icon: 'error',
			title: 'Se produjo un Error',
			showConfirmButton: false,
			timer: 1500
		});
	}
};

function actualizar(){
	if (validarTitulo() && validarDescripcion() && validarCategoria() && validarPrecio()) {
		$('#form_upd_producto').submit(function(e){
			e.preventDefault();
			var formData = new FormData(this);
			$.ajax({
				url: "../acciones.php",
				type: "POST",
				data: formData,
				contentType : false,
				processData: false,
				success: function(data){
					//alert(data);
					Swal.fire({
						icon: 'success',
						title: 'Actualizado Correctamente',
						showConfirmButton: false,
						timer: 5500,
						
					});
						//document.getElementById("form_upd_producto").reset();
						location.href = 'index.php';
				}
						
				
			});
		});
		
	}else{
		//alert("no registrado")
		Swal.fire({
			icon: 'error',
			title: 'Se produjo un Error',
			timer: 4000,
			showConfirmButton: false
			
		});
	}
};

