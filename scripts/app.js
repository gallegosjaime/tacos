var formulario = document.getElementById("#formulario");
document.addEventListener('submit', validarFormulario);

const form = document.querySelector('#formulario');


var counterVal = 0;

//Evento de Validación de Formulario
form.addEventListener('submit', ()=> {
    e.preventDefault();
    var Id = document.getElementById('btn').value = ++counterVal; //se obtiene el valor del input, y se incrementa en 1 el valor que tenga.
    var usuario = document.getElementById("usuario").value;
    var comentario = document.getElementById("comentario").value;
    valorActivo = document.querySelector('input[name="status"]:checked').value;

    //Para ver fecha y hora
    var Fecha = new Date().toLocaleDateString('en-US');
    var today = new Date();
    var Hora = today.toLocaleTimeString('en-US');

    alert("Gracias por brindarnos tu opinion");

    //Imprime los resultados del formulario
    ///////////////////////////////////////////

    
    var fila="<tr><td>"+Id+"</td><td>"+usuario+"</td><td>"+comentario+"</td><td>"+valorActivo+"</td><td>"+Fecha+"</td></tr><td>"+Hora+"</td></tr><td><button class='btn btn-outline-secondary'>Eliminar</button></td>";

    var btn = document.createElement("tr");
    btn.innerHTML=fila;
    document.getElementById("tablita").appendChild(btn);
});