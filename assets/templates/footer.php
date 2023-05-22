<?php
define('MAP_URL', 'http://localhost/tacos/assets/templates/mapaSitio.php');
define('FOOTER_IMAGES_URL', "http://localhost/tacos/images/");
?>

<div class="footer_content">
    <div class="footer_content_box">
        <header>CONTACTO</header>
        <div>
            <span><img src="<?php echo FOOTER_IMAGES_URL.'email_icon.png'?>" alt="email icon">sample@sample.com</span>
            <span><img src="<?php echo FOOTER_IMAGES_URL.'phone_icon.png'?>" alt="phone icon">81123456789</span>
            <span><img src="<?php echo FOOTER_IMAGES_URL.'phone_icon.png'?>" alt="phone icon">81323456429</span>
        </div>
    </div>
    <div class="footer_content_box">
        <header>REDES SOCIALES</header>
        <div>
            <span><img src="<?php echo FOOTER_IMAGES_URL.'facebook_icon.png'?>" alt="facebook icon"><a href="https://www.facebook.com/">Facebook</a></span>
            <span><img src="<?php echo FOOTER_IMAGES_URL.'instagram_icon.png'?>" alt="instagram icon"><a href="https://www.instagram.com/">Instagram</a></span>
            <span><img src="<?php echo FOOTER_IMAGES_URL.'twitter_icon.png'?>" alt="twitter icon"><a href="https://twitter.com/">Twitter</a></span>
        </div>
    </div>
    <div class="footer_content_developers">
        <header>CREADORES</header>
        <div class="footer_developers">
            <span>Jaime Daniel Gallegos Garza</span>
            <span>Joel Abshalom Castañeda Luna</span>
            <span>Roberto Carlos Escobedo Rodriguez</span>
            <span>Brayan Alejandro Castillo Alanis</span>
        </div>
        <div>
            <span>Kevin Orlando Guzmán Reyes</span>
            <span>Regina De la Rosa Macías</span>
            <span>Sergio Daniel Cruz Martinez</span>
        </div>
    </div>
</div>
<div class="footer_more">
    <span><a href="<?php echo MAP_URL?>">Mapa de sitio</a></span>
</div>