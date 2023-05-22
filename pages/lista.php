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
    <title>Lista</title>
    <link rel="shortcut icon" href="../images/tc.png">
</head>
<?php $ASSETS_PATH = $_SERVER["DOCUMENT_ROOT"]."/tacos/assets/templates/";?>
<body>
    <nav>
        <?php include ($ASSETS_PATH.'menu.php');?>
    </nav>
    <table class="table table-striped table_list">
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
    <footer class="footer_list">
        <?php include ($ASSETS_PATH.'footer.php');?>
    </footer>
</body>

</html>