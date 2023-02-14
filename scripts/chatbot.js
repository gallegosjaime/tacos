let askForRepeat = false;
let botStatus="base";
function chatbot_send(){
    let msg = document.getElementById("chatbot_msgsent").value.trim();
    if(msg.length!=0){
        //Crear elementos
        const div = document.createElement("div");
        const span = document.createElement("span");
        //Agregar clase
        div.classList.add("chatbot_user_ans");
        //Agregar el msg del usuario
        span.textContent= msg;
        //Unir el span con el div
        div.appendChild(span); 
        //mandarlo al html
        document.getElementById("chatbot").appendChild(div);
        newMsgFocus();
        //reiniciar el input
        document.getElementById("chatbot_msgsent").value = "";
        if (botStatus=="base") {
            if(msg==1) { 
                botStatus="general";
                generalOptions();
            }
            else if(msg==2) {
                botStatus="pucharse";
                pucharseOptions();
            }
            else if(msg==3) {
                botStatus="customer";
                customerOptions();
            }
            else error(msg);
        }
        else if(botStatus=="generalOptions"){
            if(msg==1||msg==2||msg==3||msg.toLowerCase()=="si"||msg.toLowerCase()=="no") generalOptions(msg);
            else{
                error(msg);
                botStatus="general";
                generalOptions(msg);
            }
        }
        else if(botStatus=="pucharseOptions"){
            if(msg==1||msg==2||msg==3||msg.toLowerCase()=="si"||msg.toLowerCase()=="no") pucharseOptions(msg);
            else{
                error(msg);
                botStatus="pucharse";
                generalOptions(msg);
            }
        }
        else if(botStatus=="customer"){
                botStatus="base";
                base();
        }
    }
}
function newMsgFocus(){
    //establecer el focus del scroll
    let focus = document.querySelectorAll(".chatbot div");
    focus[focus.length-1].scrollIntoView();
}

function error(msg){
    const div = document.createElement("div");
    const span = document.createElement("span");
    span.textContent="No se encontró ninguna opción con el término: "+msg+". \n Seleccione una opción válida";
    div.classList.add("chatbot_bot_ans");
    div.appendChild(span); 
    setTimeout(() => {
        document.getElementById("chatbot").appendChild(div);
        newMsgFocus();
    }, 200);
}

function generalOptions(msg){
    let div = document.createElement("div");
    let div2 = document.createElement("div");
    let txt = document.createElement("span");
    let link = document.createElement("a");
    let option1 = document.createElement("span");
    let option2 = document.createElement("span");
    let option3 = document.createElement("span");
    div.classList.add("chatbot_bot_ans");
    div2.classList.add("chatbot_bot_ans");
    if(botStatus=="general"&&askForRepeat== false){
        txt.textContent="¿Cuál es tu duda?";
        option1.textContent="1.- Acerca de nosotros";
        option2.textContent="2.- Acerca del servicio";
        option3.textContent="3.- Ninguna de esta sección";
        div.appendChild(txt);
        div.appendChild(option1);
        div.appendChild(option2);
        div.appendChild(option3);
        newMessage(div);
        botStatus="generalOptions";
    }
    else{
        if(msg==1&&askForRepeat== false){
            txt.textContent="Somos punto de venta de tacos y estamos expandiéndonos a través de internet";
            option1.textContent="Si deseas saber más sobre el tema, visita nuestra sección:";
            div.appendChild(txt);
            newMessage(div);
            if(document.title=="Tacos")link.href="pages/sobreNosotros.html";
            else link.href="sobreNosotros.html";
            link.textContent="sobre nosotros";
            link.style.textDecoration="underline";
            div2.appendChild(option1);
            div2.appendChild(link);
            newMessage(div2);
            repeatSameSection();
            askForRepeat=true;
        }
        else if(msg==2&&askForRepeat== false){
            txt.textContent="Tenemos la opción de poder comprar tanto en línea como en local, en línea pedirías la comida e irías al local a recogerla.";
            option1.textContent="Si deseas saber más sobre el tema, visita nuestra sección:";
            div.appendChild(txt);
            newMessage(div);
            repeatSameSection();
            askForRepeat=true;
        }
        else if(msg==3&&askForRepeat==false){
            base();
            botStatus="base";
        }
        else{
            if(msg.toLowerCase()=="si") {
                document.getElementById("cb_wta").textContent = "el número";
                botStatus="general";
                askForRepeat=false;
                generalOptions("1");
            }
            else if(msg.toLowerCase()=="no") {
                document.getElementById("cb_wta").textContent = "el número";
                botStatus="base";
                askForRepeat=false;
                base();
            }
            else{
                error(msg);
                repeatSameSection();
                botStatus="generalOptions";
            }
        }
    }
}

function pucharseOptions(msg){
    let div = document.createElement("div");
    let txt = document.createElement("span");
    let option1 = document.createElement("span");
    let option2 = document.createElement("span");
    let option3 = document.createElement("span");
    div.classList.add("chatbot_bot_ans");
    if(botStatus=="pucharse"&&askForRepeat== false){
        txt.textContent="¿Cuál es tu duda?";
        option1.textContent="1.- Método de pago";
        option2.textContent="2.- ¿Cuando sé que está listo mi producto?";
        option3.textContent="3.- Ninguna de esta sección";
        div.appendChild(txt);
        div.appendChild(option1);
        div.appendChild(option2);
        div.appendChild(option3);
        newMessage(div);
        botStatus="pucharseOptions";
    }
    else{
        if(msg==1&&askForRepeat== false){
            txt.textContent="El método de pago que manejamos es paga contra entrega, es decir, pagas cuando recibes el producto";
            div.appendChild(txt);
            newMessage(div);
            repeatSameSection();
            askForRepeat=true;
        }
        else if(msg==2&&askForRepeat== false){
            txt.textContent="Cuando pidas una orden y sea aceptada, habrá un contador del tiempo de preparación estimado";
            div.appendChild(txt);
            newMessage(div);
            repeatSameSection();
            askForRepeat=true;
        }
        else if(msg==3&&askForRepeat==false){
            base();
            botStatus="base";
        }
        else{
            if(msg.toLowerCase()=="si") {
                document.getElementById("cb_wta").textContent = "el número";
                botStatus="pucharse";
                askForRepeat=false;
                pucharseOptions("1");
            }
            else if(msg.toLowerCase()=="no") {
                document.getElementById("cb_wta").textContent = "el número";
                botStatus="base";
                askForRepeat=false;
                base();
            }
            else{
                error(msg);
                repeatSameSection();
                botStatus="pucharseOptions";
            }
        }
    }
}

function customerOptions(msg){
    let div = document.createElement("div");
    let div2 = document.createElement("div");
    let txt = document.createElement("span");
    let option1 = document.createElement("span");
    let option2 = document.createElement("span");
    let option3 = document.createElement("span");
    div.classList.add("chatbot_bot_ans");
    div2.classList.add("chatbot_bot_ans");
    txt.textContent="Si tienes algún problema dentro de la página o algo en particular puedes contactarnos por medio de:";
    option1.textContent="Teléfono: 8123456789";
    option2.textContent="Correo: sample@sample.com";
    option3.textContent="WhatsApp: 8123456788";
    div.appendChild(txt);
    div.appendChild(option1);
    div.appendChild(option2);
    div.appendChild(option3);
    newMessage(div);
    option1.textContent="Para volver al inicio, introduzca cualquier letra o símbolo";
    div2.appendChild(option1);
    setTimeout(() => {
        document.getElementById("chatbot").appendChild(div2);
        newMsgFocus();
    }, 3000);
}   

function base(){
    let div = document.createElement("div");
    let txt = document.createElement("span");
    let option1 = document.createElement("span");
    let option2 = document.createElement("span");
    let option3 = document.createElement("span");
    div.classList.add("chatbot_bot_ans");
    txt.textContent="¿En qué puedo ayudarte?";
    option1.textContent="1.- Dudas generales";
    option2.textContent="2.- Dudas de compra";
    option3.textContent="3.- Formas de contacto";
    div.appendChild(txt);
    div.appendChild(option1);
    div.appendChild(option2);
    div.appendChild(option3);
    newMessage(div);
}

function newMessage(newMsg){
    setTimeout(() => {
        document.getElementById("chatbot").appendChild(newMsg);
        newMsgFocus();
    }, 400);
}
function repeatSameSection(){
    document.getElementById("cb_wta").textContent = "si o no";
    let div = document.createElement("div");
    let txt = document.createElement("span");
    div.classList.add("chatbot_bot_ans");
    txt.textContent="¿Tienes otra duda de esta misma sección?";
    div.appendChild(txt);
    setTimeout(() => {
        document.getElementById("chatbot").appendChild(div);
        newMsgFocus();
    }, 1500);
}

function hide(){
    if(document.getElementById("ct_send").style.display!="none"){
        $("#ct_container").animate({ height: "50px"},500);
        document.getElementById("ct_send").style.display="none";
        document.getElementById("close_chatbot").style.transform="rotate(180deg)";
    }
    else{
        $("#ct_container").animate({ height: "400px"},500);
        setTimeout(() => {
            document.getElementById("ct_send").style.display="block";
        }, 400);
        document.getElementById("close_chatbot").style.transform="rotate(0deg)";

    }

}