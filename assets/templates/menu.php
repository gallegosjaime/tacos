<?php 
//URLS
$PagesPATH="http://localhost/tacos/pages/";
define('BASE_URL', 'http://localhost/tacos/index.php');
define('ABOUT_URL', $PagesPATH.'sobreNosotros.php');
define('COMENT_URL', $PagesPATH.'comentarios.php');
define('PICKUP_URL', $PagesPATH.'pickup.php');
define('LOGIN_URL', $PagesPATH.'login.php');
define('IMAGES_URL', "http://localhost/tacos/images/");
?>

<a href="<?php echo BASE_URL?>"><img class="logo" src="<?php echo IMAGES_URL.'logo.png'?>"></a>
<span class="about"><a href="<?php echo ABOUT_URL?>">Sobre nosotros</a></span>
<span><a href="<?php echo COMENT_URL?>">Comentarios</a></span>
<span class="pedido"><a href="<?php echo PICKUP_URL?>">Hacer Pedido</a></span>
<span class="login"><a href="<?php echo LOGIN_URL?>">Iniciar Sesión</a></span>