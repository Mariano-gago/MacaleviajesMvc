
<?php 

if(!isset($_SESSION)){
    session_start();
}

$auth = $_SESSION['login'] ?? false;
?>

<!DOCTYPE html>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MacaleViajes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../build/css/app.css">
</head>
<body>
    <header class="header">
        <div class="content content-header">
            <div class="barra">
                <a class="logo" href="/">
                    <img src="/build/img/logo.png" alt="logo">
                    <p class="title">MacaleViajes</p>
                </a>
                <nav class="nav">
                    <a href="/">Inicio</a>
                    <a href="/destinos">Destinos</a>
                    <a href="/disney">Disney</a>
                    <a href="/nosotros">Nosotros</a>
                    <a href="/contacto">Contacto</a>
                    <?php if($auth): ?>
                        <a href="/logout">Cerrar Sesion</a>
                        <?php else: ?>
                            <a href="/login">Iniciar Sesion</a>
                    <?php endif;?>
                </nav>
                <div class="media_social">
                    <a href="https://www.facebook.com/marianacaleviajes/" target="_blank"><img src="../../build/img/face.png" alt="Icono Facebook"></a>
                    <a href="https://www.instagram.com/marianacale.viajes/" target="_blank"><img src="../../build/img/instagram.png" alt="Icono Instagram"></a>
                    <a href="https://wa.me/01126709578?text=Hola!%20Estoy%20interesado%20en%20tu%20servicio'" target="_blank"><img src="../../build/img/wp.png" alt="Icono Whatsapp"></a>
                </div>
            </div>
        </div>
    </header>

    <?php echo $contenido;?>

    <footer class="footer">
        
        <div class="content-footer">
            <div class="nav-social__footer">
                <nav class="nav nav__footer">
                    <a href="/">Inicio</a>
                    <a href="/nosotros">Nosotros</a>
                    <a href="/destinos">Destinos</a>
                    <a href="/contacto">Contacto</a>
                    
                </nav>
                <div class="media_social">
                    <a href="https://www.facebook.com/marianacaleviajes/" target="_blank"><img src="../../build/img/face.png" alt="Icono Facebook"></a>
                    <a href="https://www.instagram.com/marianacale.viajes/" target="_blank"><img src="../../build/img/instagram.png" alt="Icono Instagram"></a>
                    <a href="https://wa.me/01126709578?text=Hola!%20Estoy%20interesado%20en%20tu%20servicio'" target="_blank"><img src="../../build/img/wp.png" alt="Icono Whats app"></a>
                </div>
            </div>
            <div class="info">
                <p class="info-footer">Encuentre aqui toda la información, imágenes, consejos y precios para viajar por Argentina y el mundo. MacaleViajes es una agencia de viajes online especializada en Viajes por Argentina y el mundo. Solicite hoy su cotización sin cargo.</p>
                <p class="info-footer">@Todos los derechos reservados. Copyrigth <?php echo date('Y') ?>. Created by <span><a href="">MFG</a></span></p>
            </div>
        </div>
    </footer>
    <script src="../build/js/bundle.js"></script>
    <script src="../build/js/prueba.js"></script>
        <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</php>