
//Funciónn agregar datos
function agregarDatos(ciudad,pais,descripcion,categoria,clasificacion){

cadena="ciudad=" + ciudad + 
      "&pais=" + pais + 
      "&descripcion=" + descripcion +
      "&categoria=" + categoria +
      "&clasificacion=" + clasificacion;
	
	$.ajax({
		type: "POST",
		url: "php/agregarDatos.php",
		data: cadena,
		success: function(r){
			if(r==0){
				alertify.error("Falló el servidor");
				
			}else{
				$('#tabla').load('components/tabla.php');
				alertify.success("Se agregaron los datos con éxito");
			}
		}
	});

}


//Funcion deleteConfirm
/*function deleteConfirm(id_ciudad){
  alertify.confirm("¿Está seguro que desea eliminar los datos seleccionados?",
  function(){
    eliminarDatos(id)
  },
  function eliminarDatos(){
    alertify.error('Operación cancelada');
  });
  datos="id=" + id;
}

function eliminarDatos(id_ciudad){
	  $.ajax({
  	type:"POST",
  	url:"php/eliminarDatos.php",
  	data:datos,
  	success:function(r){
  		if(r==1){
  			$('#tabla').load('components/tabla.php');
  			alertify.success("Los datos fueron eliminados!")
  		}else{
  			alertify.error("falló el servidor");
  		}
  	}

  });
}*/