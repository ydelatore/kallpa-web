<?php include 'inc/_articulos.php'; ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans:400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/gridsystem.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link href="https://file.myfontastic.com/pknhqXiB8KLJ9fVeR4Zfff/icons.css" rel="stylesheet">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/colorbox.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <title>Kallpa - Corredores de Seguros</title>
    </head>
<!--    comienzo el trabajo-->
    <body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
       
        <?php include 'inc/_header.php'; ?>
        
        <section class="wrapper seccion seccion-seguros">
            <div class="seguro-salud caja-seguros">
                <h2><a href="salud.php">Seguros de Salud</a></h2>
                <img src="img/bisel.png" alt="" class="bisel-titulo">
                
                <nav>
                    <ul class="indice">
                        <li><a href="salud.html">Seguro de Salud</a></li>
                        <li><a href="salud.html">Seguro Accidentes Personales</a></li>
                        <li><a href="salud.html">Seguro Oncologicos</a></li>
                        <li><a href="salud.html">SCTR</a></li>
                    </ul>
                </nav>
            </div>
            
            <div class="seguro-vida caja-seguros">
                <h2><a href="vida.php">Seguros de Vida</a></h2>
                <img src="img/bisel.png" alt="" class="bisel-titulo">
                
                <nav>
                    <ul class="indice">
                        <li><a href="vida.html">Seguros de vida</a></li>
                        <li><a href="vida.html">Seguro vida 20 años</a></li>
                        <li><a href="vida.html">Seguro Academico</a></li>
                    </ul>
                </nav>
            </div>
            
            <div class="seguro-patrimonio caja-seguros">
                <h2><a href="patrimonio.php">Seguro Patrimonial</a></h2>
                <img src="img/bisel.png" alt="" class="bisel-titulo">
                
                <nav>
                    <ul class="indice">
                        <li><a href="patrimonio.html">Seguro Vehicular</a></li>
                        <li><a href="patrimonio.html">Seguro Contra Robos</a></li>
                        <li><a href="patrimonio.html">Seguros de Riesgo</a></li>
                        <li><a href="patrimonio.html">Seguro de Incendio</a></li>
                    </ul>
                </nav>
            </div>
            
            <div class="nosotros caja-seguros">
                <h2><a href="nosotros.php">Quienes Somos</a></h2>
                <img src="img/bisel.png" alt="" class="bisel-titulo">
                
                <nav>
                    <ul class="indice">
                        <li><a href="salud.html">Misión </a></li>
                        <li><a href="salud.html">Visión</a></li>
                        <li><a href="salud.html">Galeria de Fotos</a></li>
                    </ul>
                </nav>
            </div>
            
            <div class="contacto caja-seguros">
                <h2><a href="contacto.php">Contáctanos</a></h2>
                <img src="img/bisel.png" alt="" class="bisel-titulo">
                
                <nav>
                    <ul class="indice">
                        <li><a href="salud.html">Asesores</a></li>
                        <li><a href="salud.html">Consultas</a></li>
                        <li><a href="salud.html">Solicita un Presuesto</a></li>
                        <li><a href="salud.html">Solicita Tu Estado de Cuenta</a></li>
                    </ul>
                </nav>
            </div>
        </section>
        
        <section class="contenedor" id="informativo">
            <h2 class="titulo-informativo lt-100">Informativo</h2>
            
            <article class="caja-informativo lt-1-3" id="info1">
                <h3 class="titulo-informativos"><?php echo $titulo_info1; ?></h3>
                
                <p><?php echo $resumen_info1; ?></p>
                
                <div class="btn-leer"><a class="informativo-amplio" href="#info-amplio1">Leer más</a></div>
                
                <div class="video-informativo">
                    <?php echo $video_info1; ?>
                </div>
            </article>
            <div style="display:none;">
                <div class="informativo-amplio" id="info-amplio1">
                    <div class="video-informativo">
                        <?php echo $video_info1; ?>
                    </div>
                   
                    <h3 class="titulo-informativos"><?php echo $titulo_info1; ?></h3>
                    
                    <?php echo $articulo_info1; ?>
                    
                    <div class="fb-like" data-href="http://localhost:8888/proyectos-web/kallpa/" data-width="500px" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
                    
                    <div class="fb-comments" data-href="http://localhost:8888/proyectos-web/kallpa/" data-width="100%" data-numposts="3" data-order-by="reverse-time"></div>
                </div>
            </div>
            
            <article class="caja-informativo lt-1-3" id="info2">
                <h3 class="titulo-informativos"><?php echo $titulo_info2; ?></h3>
                
                <p><?php echo $resumen_info2; ?></p>
                
                <div class="btn-leer"><a class="informativo-amplio" href="#info-amplio2">Leer más</a></div>
                
                <div class="video-informativo">
                    <?php echo $video_info2 ?>
                </div>
            </article>
            <div style="display:none;">
                <div class="informativo-amplio" id="info-amplio2">
                    <div class="video-informativo">
                        <?php echo $video_info2 ?>
                    </div>
                   
                    <h3 class="titulo-informativos"><?php echo $titulo_info2; ?></h3>
                    
                    <?php echo $articulo_info2; ?>
                    
                    <div class="fb-like" data-href="http://localhost:8888/proyectos-web/kallpa/" data-width="500px" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
                    
                    <div class="fb-comments" data-href="http://localhost:8888/proyectos-web/kallpa/" data-width="100%" data-numposts="3" data-order-by="reverse-time"></div>
                </div>
            </div>
            
            <article class="caja-informativo lt-1-3" id="info3">
                <h3 class="titulo-informativos"><?php echo $titulo_info3; ?></h3>
                
                <p><?php echo $resumen_info3; ?></p>
                
                <div class="btn-leer"><a class="informativo-amplio" href="#info-amplio3">Leer más</a></div>
                
                <div class="video-informativo">
                    <?php echo $video_info3; ?>
                </div>
            </article>
            <div style="display:none;">
                <div class="informativo-amplio" id="info-amplio3">
                    <div class="video-informativo">
                        <?php echo $video_info3; ?>
                    </div>
                   
                    <h3 class="titulo-informativos"><?php echo $titulo_info3; ?></h3>
                    
                    <?php echo $articulo_info3; ?>
                    
                    <div class="fb-like" data-href="http://localhost:8888/proyectos-web/kallpa/" data-width="500px" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
                    
                    <div class="fb-comments" data-href="http://localhost:8888/proyectos-web/kallpa/" data-width="100%" data-numposts="3" data-order-by="reverse-time"></div>
                </div>
            </div>
            
            
            
            <h2 class="titulo-informativo lt-100">Agencias Asociadas</h2>
            <div class="agencias-home">
                <div class="agencia-home"><img src="img/La_positiva.jpg" alt="Seguros La Positiva"></div>
                <div class="agencia-home"><img src="img/pacifico.jpg" alt="Seguros La Positiva"></div>
                <div class="agencia-home"><img src="img/mapfre.jpg" alt="Seguros Mapfre"></div>
                <div class="agencia-home"><img src="img/chubb.jpg" alt="Chubb Group of Insurance Companies"></div>
            </div>
             
           
             
            
             
        </section>
        
        <?php include 'inc/_footer.php'; ?>
        
        <script src="js/jquery.colorbox.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>