//Llamamos a la funcion ready para cargar el DOM

$(document).on("ready",inicio);

function inicio(){
	//Al hacer clic en el boton pubicar llama a la funcion Inicio
	$("#publicar").on("click", mensaje)
}

function mensaje(){
	alert("Haz presionado el boton publicar")
}