<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../images/tc.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PICK UP</title>
    <Link rel="stylesheet" href="../css/estilos_Reg.css"></Link>
    <Link rel="stylesheet" href="../css/styles.css"></Link>
</head>
<?php $ASSETS_PATH = $_SERVER["DOCUMENT_ROOT"]."/tacos/assets/templates/";?>
<body>
    <nav>
        <?php include ($ASSETS_PATH.'menu.php');?>
    </nav>
    <div class="separador"></div>
    <center><img class="lg" src="../images/logo.png"></center>

    <p class="lema">
       Ordena y recoje sin hacer filas!
       prueba nuestro nuevo modelo de entrega y disfruta de tu comida
    </p>

   <form class="orden">
     <p>Ordena sin problema</p>
     <input type="text">
     <button class="btn1">Enviar Orden</button>
   </form>

   <section class="datos">
      <a href="https://wa.me/+528117499219?text=Me%20gustaria%20ordenar" target="_blank"><img class="wpp" src="../images/wpp.png"></a>
     <p class="text">Para mas comodidad, escribenos directo!</p>
   </section>

   <center><img class="dl" src="../images/dlv.png"></center>
     
    <footer class="footer_pickup">
        <?php include ($ASSETS_PATH.'footer.php');?>
    </footer>
</body>
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