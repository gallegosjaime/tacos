<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tacos</title>
    <link rel="shortcut icon" href="images/tc.png">
    <Link rel="stylesheet" href="css/styles.css"></Link>
    <Link rel="stylesheet" href="css/style2.css"></Link>
</head>
<body>
    <nav id="menu">
      <?php  $ASSETS_PATH = $_SERVER["DOCUMENT_ROOT"]."/tacos/assets/templates/";?>
      <?php include ($ASSETS_PATH.'menu.php');?>
    </nav>
    <div class="chatbot_container" id="ct_container" >
      <?php include ($ASSETS_PATH.'chatbot.php');?>
    </div>
    <div style="align-items: center; padding-top: 80px;">
        <div class="container">
            <ul class="slider">
              <li id="slide1">
                <img src="images/logo.jpg"/>
                <div class="centrado">Taco'miendo</div>
              </li>
              <li id="slide2">
                <img src="images/papa2.jpg"/>
                <div class="centrado">una orden de papas con</div>
                <div class="centrado2">cada orden (valido jueves y viernes)</div>
              </li>
              <li id="slide3">
                <img src="images/bistec.jpg"/>
                <div class="centrado">Orden de bistec a mitad de</div>
                <div class="centrado2">precio todos los miercoles</div>
              </li>
            </ul>
            <ul class="menu">
              <li>
                <a href="#slide1">1</a>
              </li>
              <li>
                <a href="#slide2">2</a>
              </li>
               <li>
                <a href="#slide3">3</a>
              </li>
            </ul>
          </div>
    </div>
    <div>
        <section class="wrap">
            <h2 style="color: aliceblue; font-size: 55px;">Menú</h2>
            <div class="column-3 columns">
              <div class="menu-restaurante" style="background: center;background-size: cover;">
                <h3>Menú Martes a Viernes</h3>
                <hr>
                <h4>Platos</h4>
                <img src="images/bistec.jpg" alt="Team" style="height: 200px; width: 200px; align-self: center;">
                <p>Orden de tacos de bisteck.</p>
                <img src="images/trompo.jpg" alt="Team" style="height: 200px; width: 200px; align-self: center;">
                <p>Orden de tacos de trompo.</p>
                <img src="images/gringa.jpg" alt="Team" style="height: 200px; width: 200px; align-self: center;">
                <p>Gringa.</p>
                <img src="images/pirata.jpg" alt="Team" style="height: 200px; width: 200px; align-self: center;">
                <p>Pirata.</p>
                <img src="images/burrito.jpg" alt="Team" style="height: 200px; width: 200px; align-self: center;">
                <p>Burrito.</p>
                <img src="images/hamburgesa.jpg" alt="Team" style="height: 200px; width: 200px; align-self: center;">
                <p>Hamburguesa.</p>
                <br>
                <p class="precio-menu">
                  Precio:
                  <span>$45 c/u</span>
                </p>
              </div>
              <div class="menu-restaurante" style="background: center;background-size: cover;">
                <h3>Menú fin de semana</h3>
                <hr>
                <h4>Tacos</h4>
                <img src="images/barbacoa.jpg" alt="Team" style="height: 200px; width: 200px; align-self: center;">
                <p>Orden de tacos de barbacoa.</p>
                <img src="images/canasta.jpg" alt="Team" style="height: 200px; width: 200px; align-self: center;">
                <p>Orden de  tacos de canasta.</p>
                <img src="images/enchiladas.jpg" alt="Team" style="height: 200px; width: 200px; align-self: center;">
                <p>Orden de Enchiladas.</p>
                <img src="images/flautas.jpg" alt="Team" style="height: 200px; width: 200px; align-self: center;">
                <p>Orden de  flautas.</p>
                <br>
                <p class="precio-menu">
                  Precio:
                  <span>$50 c/u</span>
                </p>
              </div>
              <div class="menu-restaurante" style="background: center;background-size: cover;">
                <h3>Acompañamientos</h3>
                <hr>
                <h4></h4>
                <img src="images/coca.jpg" alt="Team" style="height: 200px; width: 200px; align-self: center;">
                <p>Coca.</p>
                <img src="images/agua.jpg" alt="Team" style="height: 200px; width: 200px; align-self: center;">
                <p>Aguas de sabor.</p>
                <img src="images/papa.jpg" alt="Team" style="height: 200px; width: 200px; align-self: center;">
                <p>Orden de  papas de galeana.</p>
                <img src="images/aros.jpg" alt="Team" style="height: 200px; width: 200px; align-self: center;">
                <p>Orden de  aros de cebolla.</p>
                <p class="precio-menu">
                  Precio:
                  <span>$30 c/u</span>
                </p>
              </div>
            </div>
          </section>
    </div>
    <footer>
      <?php include ($ASSETS_PATH.'footer.php');?>
    </footer>
</body>
<script src="assets/libraries/jquery.js"></script>
<script src="scripts/chatbot.js"></script>
<script src="firebase/login.js" type="module"></script>

<!-- FIREBASE SCRIPTS 
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
-->
</html>