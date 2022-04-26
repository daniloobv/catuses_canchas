   <nav class="main-nav">
    <div class="container container--flex">
       <span class="icon-menu" id="btnmenu" ></span>
       <ul class="menu" id="menu">
           <li class="menu__item"><a href="index.php" class="menu__link menu__link--select">Inicio</a></li>
           <li class="menu__item"><a href="nosotros.php" class="menu__link">Habilidades</a></li>
           <li class="menu__item"><a href="galeria.php" class="menu__link">Proyectos</a></li>
           <li class="menu__item"><a href="contacto.php" class="menu__link">Contactame </a></li>
           <li class="menu__item"><a href="acceder.php" class="menu__link"> Sistemas...<span class="icon-graduation-cap"></span></a></li>
       </ul>
       <div class="social-icon">
           <a href="https://www.facebook.com/IdariSoft.SA" class="social-icon__link"><span class="icon-facebook"></span></a>
           <a href="https://twitter.com/idarisoft" class="social-icon__link"><span class="icon-twitter"></span></a>
           <a href="https://www.youtube.com/c/IdariSoftSAAsesoriaenSoftwareInternacional" class="social-icon__link"><span class="icon-youtube"></span></a>
           <a href="mailto:dvivas@catuses.com" class="social-icon__link"><span class="icon-mail"></span></a>
           <a href="https://wa.me/50589065522" class="social-icon__link"><span class="icon-whatsapp"></span></a>
           <a href="https://www.paypal.com/paypalme/lapto2006" class="social-icon__link"><span class="icon-paypal"></span></a>

           <a href="#" class="social-icon__link"><span class="icon-"> <strong> <div id="seccionRecargar"></div> </strong> </span></a>

           <!-- //actualizas el div automaticamente -->
           <script>
            $(document).ready(function() {
                var refreshId = setInterval( function(){
                    $('#seccionRecargar').load('contador_visitas.php');
                }, 1000 );
            });
        </script>



    </div>
</div>
</nav>