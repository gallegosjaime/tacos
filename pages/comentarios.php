<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <Link rel="stylesheet" href="../css/stylesc.css"></Link>
    <link type="text/css" href="../css/styles.css" rel="stylesheet" />
    <title>Comentario</title>
    <link rel="shortcut icon" href="../images/tc.png">
</head>

<?php $ASSETS_PATH = $_SERVER["DOCUMENT_ROOT"]."/tacos/assets/templates/";?>

<body>
    <nav class="nav_comentarios">
        <?php include ($ASSETS_PATH.'menu.php');?>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-8 offset-2">
                <form id="transaccion" name="formulario" class="p-3 mt-5 shadow border">
                    <h3 class="text-center text-primary">Añade tu comentario</h3>

                    <label class="blockquote"><strong>Usuario</strong></label>
                    <input id="usuario" class="form-control my-2" type="text" required></input>

                    <label class="blockquote"><strong>Comentario</strong></label>
                    <textarea class="form-control" id="comentario" rows="3" required></textarea>
                
                <form>
                    <p>
                    </p>

                    <label class="blockquote"><strong>Calificación</strong></label>
                    <p class="clasificacion">
                    <input type="radio" name="status" value="Excelente" id="Excelente" required>
                     <label for="interesado">  &#128523; Excelente</label>

                     <input type="radio" name="status" value="Satisfactorio" id="Satisfactorio" required>
                     <label for="interesado"> &#128512; Satisfactorio</label> 

                     <input type="radio" name="status" value="Bueno" id="Bueno" required>
                     <label for="interesado"> &#128513; Bueno</label> 

                     <input type="radio" name="status" value="Malo" id="Malo" required>
                     <label for="interesado"> &#128544; Malo</label> 

                     <input type="radio" name="status" value="Pesimo" id="Pesimo" required>
                     <label for="interesado"> &#128545; Pesimo</label> 

                    </p>

                    <button type="submit" id="btn" class="btn btn-outline-success"value="0">Enviar</button>

                    <button type="reset" class="btn btn-outline-danger">Cancelar</button>

                    <button type="button" class="btn btn-outline-warning" onclick="location.href='pagError.html'">Ver lista de Comentarios</a></button>
    
                  </form>
                
                </form>
                <hr>
                
                <table class="table table-striped">
                    <h3>Tabla de Comentarios</h3>
                    <tr>
                        <th>No</th>
                        <th>Usuario</th>
                        <th>Comentario</th>
                        <th>Calificación</th>
                        <th>Fecha de Comentario</th>
                        <th>Hora</th>
                        <th></th>
                        </tr>
                    <tr>
                        <tbody id="tablita"></tbody>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <footer>
        <?php include ($ASSETS_PATH.'footer.php');?>
    </footer>
    <script src="app.js"></script>
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