<?php include 'comunicacion.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <?php
    date_default_timezone_set("America/Managua");
    $page_name = "PAGINA INICIO PROYECTO";
    ?>
    <title><?php echo $page_name  ?></title>


    <!-- <title>IdariSoft-SA</title> -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/nosotros.css">
    <link rel="stylesheet" href="css/galeria.css">

    <link href="https://file.myfontastic.com/7TDVGZ4jsm9MxKcNuXbiVR/icons.css" rel="stylesheet">



</head>
<body>

  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        xfbml            : true,
        version          : 'v9.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
attribution=setup_tool
page_id="102014510317768"
theme_color="#6699cc"
logged_in_greeting="saludos estimado tambien podemos comunicarnos por WhatsApp +50575418902"
logged_out_greeting="saludos estimado tambien podemos comunicarnos por WhatsApp +50575418902">
</div>

<?php
if(! empty($_SERVER['REMOTE_ADDR']) ){
   $ip = $_SERVER['REMOTE_ADDR'];
}
else{
   $ip = empty($_SERVER['HTTP_X_FORWARDED_FOR']) ? '' : $_SERVER['HTTP_X_FORWARDED_FOR'];
}

// $fecha = date('Y-m-d');
// $sqlx = "SELECT * FROM visitas where ip = '$ip'";
// $queryx = $conn->query($sqlx);
// $prowx = $queryx->fetch_assoc();
// if( $prowx['ip'] == $ip && $prowx['access'] == $hoy){
// }
// else
// {
//     $sql = "INSERT INTO visitas(ip) VALUES ('$ip')";
//     if($conn->query($sql)){
//     }
//     else{
//     }
// }
?>



<header class="main-header">
    <div class="container container--flex">
        <div class="logo-container columnn column--50">
            <h1 class="logo"><strong>NOMBRE DEL SISTEMA O PROYECTO</strong></h1>
        </div>
        <div class="main-header__contactInfo column column--50">
            <p class="main-header__contactInfo__phone">
                <span class="icon-phone">
                    <a class="abx" href="tel:+50589065522"> +(505) 8906 - 5522 </a>
                </span>
            </p>
            <p class="main-header__contactInfo__address">
                <span class="icon-location"> 22 Calle Sureste, Managua, Nic.</span>
            </p>
        </div>
    </div>
</header>