function tag(id) {return document.getElementById(id);};
function poner_evento(elemento, evento, f)	{
	if (document.addEventListener)
		elemento.addEventListener(evento, f, true);
	else
		if (document.attachEvent)
			elemento.attachEvent("on" + evento, f);
		else
			elemento["on" + evento] = f;
}

function cancelar_evento(e) {
	if (!e) e = window.event;
	if (e.preventDefault) {
		e.preventDefault();
	} else {
		e.returnValue = false;
	}
}

function validar_ejemplo(e) {
	errores = [];
	if (this.comentario.value == "")
		errores.push("Debe escribir en el recuadro para el comentario.");
	if (this.nombre.value == "")
		errores.push("Debe indicarnos su nombre.");
	if (!(this.trato[0].checked || this.trato[1].checked))
		errores.push("Indíquenos el tratamiento que debemos darle.");
	if (this.seguridad.value == "")
		errores.push("Rellene el código de seguridad con el resultado de la operación expuesta.");
	if (errores.length > 0)	{
		alert(errores.join("\n"));
		cancelar_evento(e);
	}
}




function redireccion() {
    location.href="comentarios.html";
}