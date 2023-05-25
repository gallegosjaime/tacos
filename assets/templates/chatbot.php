<?php
//Definir las URL de donde se encuentran las imagenes
define('CHATBOT_IMAGES_URL', "http://localhost/tacos/images/");
?>

<header onclick="hide()" title="Minimizar chatbot">
    <img class="chatbot_icon" src="<?php echo CHATBOT_IMAGES_URL.'chatbot_icon.png'?>">
    <span>Chatbot</span>
    <img class="chatbot_hide" id="close_chatbot" src="<?php echo CHATBOT_IMAGES_URL.'down_icon.png'?>">
</header>
<div class="chatbot_howtoanswer" >
    <span>Escribe <span id="cb_wta">el número</span> para reponder</span>
</div>
<div class="chatbot" id="chatbot">
    <div class="chatbot_bot_ans">
        <span>¿Hola en qué puedo ayudarte?</span>
        <span>1.- Dudas generales</span>
        <span>2.- Dudas de compra</span>
        <span>3.- Formas de contacto</span>
    </div>
</div>
<div class="chatbot_send" id="ct_send">
    <input type="text" id="chatbot_msgsent"><button onclick="chatbot_send()">></button>
</div>