<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros</title>
    <link rel="shortcut icon" href="../images/tc.png">
    <Link rel="stylesheet" href="../css/styles.css"></Link>
    <Link rel="stylesheet" href="../css/style2.css"></Link>
</head>

<?php $ASSETS_PATH = $_SERVER["DOCUMENT_ROOT"]."/tacos/assets/templates/";?>
<body>
    <div>
        <nav id="menu">
        <?php include ($ASSETS_PATH.'menu.php');?>
        </nav>
    </div>
    <div class="chatbot_container" id="ct_container" >
        <?php include ($ASSETS_PATH.'chatbot.php');?>
    </div>
    <div class="size">
        <h1>Sobre nosotros</h1>
        <div class="box">
            <img  class="team" src="../images/logo.png" alt="Team">
        </div>
        <div class="Paragraph">
            <h2 style="padding-left: 15px;">
                Equipo
            </h2>
            <p style="padding-left: 15px;">
                Somos un equipo de profesionales que hemos creado el restaurante donde nos gustaría comer a diario y en las ocasiones especiales. 
                Con menú o a la carta. 
                Con amigos o con clientes, con tiempo para disfrutar o con algo más de prisa porque el trabajo lo requiere.
            </p>
        </div>
        <div class="Paragraph">
            <h2 style="padding-left: 15px;">
                Calidad de servicio
            </h2>
            <p style="padding-left: 15px;"> 
                Se cuenta con una cocina de alta calidad que incluso fue distinguida el  22 de Diciembre 2021, 
                por la Secretaria de Turismo, Gobierno del Estado de Nuevo León al obtener el certificado H, 
                eso es lo que nos distingue ante cualquier empresa que realice y venda TACOS DE VAPOR.
            </p>

            <div class="Paragraph">
                <h2 style="padding-left: 15px;">
                    Inicios
                </h2>
                <p style="padding-left: 15px;"> 
                    En el año de 2015, Kevis comenzaro a vender los tacos taco'miendo en un motocarro 
                    ambulante en la parte de atrás de los patios del periódico el diario. Gracias al rico sabor y amabilidad que lo distinguía 
                    se hizo reconocidos entre la zona. Al paso de los años se hizo una expansión, 
                    de ser motocarros pasó a convertirse en  locales establecidos para mayor comodidad del cliente.
                </p>
            </div>
        </div>
    </div>
    <footer>
        <?php include($ASSETS_PATH."footer.php");?>
    </footer>
</body>
<script src="../libraries/jquery.js"></script>
<script src="../scripts/chatbot.js"></script>
<script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.17.2/firebase-app.js";
    import { getAuth, createUserWithEmailAndPassword,  signInWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/9.17.2/firebase-auth.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries
  
    // Your web app's Firebase configuration
    const firebaseConfig = {
      apiKey: "AIzaSyBl8wo01fT5WJBODmW65ZuPhOug4v47GEs",
      authDomain: "finanzas-test.firebaseapp.com",
      databaseURL: "https://finanzas-test-default-rtdb.firebaseio.com",
      projectId: "finanzas-test",
      storageBucket: "finanzas-test.appspot.com",
      messagingSenderId: "583931976121",
      appId: "1:583931976121:web:02d6d596cbcf4fa0b7fe68"
    };
    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const Auth = getAuth();
    signInWithEmailAndPassword(Auth,"gg@gmail.com", "123456").then((userRecords) => {
      document.querySelector(".login a").innerHTML="Jaime";
      document.querySelector(".pedido").style.display="block";
    }).catch((error) => console.log(error));
  </script>
</html>