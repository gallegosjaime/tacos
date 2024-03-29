<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
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
    <div id="registrar">
            <a href="../index.php">Regresar</a>
    </div>
    <div id="envoltura">
        <div id="contenedor">
 
            <div id="cuerpo">
                <form id="form-login" method="post" onsubmit="return false">
                    <p><label for="nombre">Nombre:</label></p>
                        <input name="nombre" type="text" id="nombre" class="nombre" placeholder="Pon tu nombre" autofocus=""/ ></p>
 
                    <!--=============================================================================================-->
                    <!--La sisguientes 2 líneas son para agregar campos al formulario con sus respectivos labels-->
                    <!--Puedes usar tantas como necesites-->
                    <p><label for="apellidos">Apellidos:</label></p>
                        <input name="apellidos" type="text" id="apellidos" class="apellidos" placeholder="Pon tus apellidos" /></p>
                    <!--=============================================================================================-->
 
                    <p><label for="correo">Correo:</label></p>
                        <input name="correo" type="text" id="correo" class="correo" placeholder="Pon tu mail" /></p>
 
                    <p><label for="pass">Contraseña:</label></p>
                        <input name="pass" type="password" id="pass" class="pass" placeholder="Pon tu contraseña"/ ></p>
 
                    <p><label for="repass">Repetir Contraseña:</label></p>
                        <input name="repass" type="password" id="repass" class="repass" placeholder="Repite contraseña" /></p>
 
                    <p id="bot"><input name="submit" type="submit" value="Registrar" class="boton"/></p>
                </form>
            </div>
 
    
        </div><!-- fin contenedor -->
 
    </div>
</body>
 
</html>

<!-- FIREBASE SCRIPTS -->
<script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.17.2/firebase-app.js";
    import { getAuth, createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/9.17.2/firebase-auth.js";
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
    const signupform = document.querySelector('#form-login');
    signupform.addEventListener('submit', ()=> {
        const Auth = getAuth();
        const Email = document.querySelector('#correo').value;
        const Password = document.querySelector('#pass').value;
        createUserWithEmailAndPassword(Auth,Email, Password).then((userCredential) => {
            alert("usuario creado");
            location.href="login.html";
        })
        .catch(function(error){
                alert(error.message); 
        })    
    });
  </script>