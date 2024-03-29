<!DOCTYPE html>
<html lang="es">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <link type="text/css" href="../css/estilos.css" rel="stylesheet" />
    <link type="text/css" href="../css/styles.css" rel="stylesheet" />
    <link rel="shortcut icon" href="../images/tc.png">
</head>
<?php $ASSETS_PATH = $_SERVER["DOCUMENT_ROOT"]."/tacos/assets/templates/";?>
<body>
    <nav>
        <?php include ($ASSETS_PATH.'menu.php');?>
    </nav>
    <div id="envoltura">
        <div id="contenedor">
 
            <div id="cabecera" >
            </div>
 
            <div id="cuerpo">
                <form id="form-login" action="" method="post" autocomplete="off" onsubmit="return false">
                    <!--A saber, el atributo for funciona como el id.-->
                    <!--ejemplo <label for="usuario">Usuario:</label>-->
                    <!--required es nuevo en html5, si el campo está vacío te avisa, pero cuidado, no valida la información-->
                    <p><label >Usuario:</label></p>
                        <input name="usuario" type="text" id="usuario" placeholder="Ingresa Usuario" autofocus="" required=""></p>
 
                    <p><label>Contraseña:</label></p>
                        <input name="contrasenia" type="password" id="contrasenia" placeholder="Ingresa Password" required=""></p>
 
                    <p id="bot"><input type="submit" id="submit" name="submit" value="Ingresar" class="boton"></p>
                </form>
                <div id="registrar">
                    <a href="registro.HTML">Registrarse</a>
                </div>
            </div><!--fin cuerpo-->
        </div><!-- fin contenedor -->
    </div><!--fin envoltura-->
</body>
 
</html>

<!-- FIREBASE SCRIPTS -->
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

    var login = document.querySelector("#form-login");
    login.addEventListener('submit', ()=> {
        const Auth = getAuth();
    const Email = document.querySelector('#usuario').value;
    const Password = document.querySelector('#contrasenia').value;
    signInWithEmailAndPassword(Auth,Email, Password).then((userRecords) => {
        location.href="../index.html";
    }).catch((error) => alert("usuario/contraseña incorrectos"));
    })
  </script>

  <!-- CUSTOM CODE -->
  <script src="main.js"></script>