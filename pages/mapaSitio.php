<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa de Sitio</title>
    <link rel="shortcut icon" href="../images/tc.png">
    <Link rel="stylesheet" href="../css/styles.css"></Link>
    <Link rel="stylesheet" href="../css/styles_R.css"></Link>
</head>
<?php $ASSETS_PATH = $_SERVER["DOCUMENT_ROOT"]."/tacos/assets/templates/";?>
<body>
    <nav>
        <?php include ($ASSETS_PATH.'menu.php');?>
    </nav>
    <div class="mapa">
        <h1>Categorias</h1>
        <ul>
            <div class="pickup">
                <span>PEDIDOS</span>
                <span><a href="pickup.html">Pickup</a></span>
            </div>
            <div class="usuario">
                <span>USUARIO</span>
                <span><a href="login.html">Iniciar Sesión</a></span>
                <span><a href="registro.html">Registro</a></span>
            </div>
            <div class="about_page">
                <span>SOBRE LA PÁGINA</span>
                <span><a href="index.html">Pagina de inicio</a></span>
                <span><a href="sobreNosotros.html">Sobre nosotros</a></span>
            </div>
            <div class="comentarios">
                <span>COMENTARIOS</span>
                <span><a href="comentarios.html">Registro</a></span>
                <span><a href="lista.html">Todos los comentarios</a></span>
            </div>
        </ul>
    </div>
    <footer>
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