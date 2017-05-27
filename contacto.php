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
        
        <section class="contenedor" id="informativo">
            <h2 class="titulo-informativo lt-100">Contacto</h2>
            
            <form id="form-contacto" action="" method="post">
                <div id="inputs">
                    <input type="text" name="nombre" placeholder="Nombre y Apellido">
                    <input type="text" name="empresa" placeholder="Emoresa">
                    <input type="text" name="cargo" placeholder="Cargo">
                    <input type="tel" name="telefono" placeholder="Teléfono">
                    <input type="email" name="email" placeholder="E-mail">
                </div>

                <div id="textarea">
                    <textarea name="mensaje" placeholder="Mensaje"></textarea>
                </div>

                <div id="boton">
                    <input type="submit" id="btn" value="Enviar">
                </div>
            </form>
        </section>
        
        <section class="contenedor">
            <h2 class="titulo-informativo lt-100">Atención al cliente</h2>
            
            <div class="fila">
                <div class="asesores tb-1-3">
                    <div class="asesor-pic"><img src="img/katerin.jpg" alt="Katerin"></div>

                    <div class="asesor-dato">
                        <p class="cargo">Atención al cliente</p>
                        <p class="datos">Katerin Torres</p>
                        <p class="datos">999 999 999</p>
                        <p class="datos">ktorres@kallpacorredoresdeseguros.pe</p>
                    </div>
                </div>

                <div class="asesores tb-1-3">
                    <div class="asesor-pic"><img src="img/katerin.jpg" alt="Katerin"></div>

                    <div class="asesor-dato">
                        <p class="cargo">Asesor comercial</p>
                        <p class="datos">Katerin Torres</p>
                        <p class="datos">999 999 999</p>
                        <p class="datos">ktorres@kallpacorredoresdeseguros.pe</p>
                    </div>
                </div>

                <div class="asesores tb-1-3">
                    <div class="asesor-pic"><img src="img/katerin.jpg" alt="Katerin"></div>

                    <div class="asesor-dato">
                        <p class="cargo">Servicio postventa</p>
                        <p class="datos">Katerin Torres</p>
                        <p class="datos">999 999 999</p>
                        <p class="datos">ktorres@kallpacorredoresdeseguros.pe</p>
                    </div>
                </div>
            </div>
            
            <div class="fila">
                <div class="asesores tb-1-3">
                    <div class="asesor-pic"><img src="img/katerin.jpg" alt="Katerin"></div>

                    <div class="asesor-dato">
                        <p class="cargo">Seguros generales</p>
                        <p class="datos">Katerin Torres</p>
                        <p class="datos">999 999 999</p>
                        <p class="datos">ktorres@kallpacorredoresdeseguros.pe</p>
                    </div>
                </div>

                <div class="asesores tb-1-3">
                    <div class="asesor-pic"><img src="img/katerin.jpg" alt="Katerin"></div>

                    <div class="asesor-dato">
                        <p class="cargo">Seguro vehicular</p>
                        <p class="datos">Katerin Torres</p>
                        <p class="datos">999 999 999</p>
                        <p class="datos">ktorres@kallpacorredoresdeseguros.pe</p>
                    </div>
                </div>

                <div class="asesores tb-1-3">
                    <div class="asesor-pic"><img src="img/katerin.jpg" alt="Katerin"></div>

                    <div class="asesor-dato">
                        <p class="cargo">Central teléfonica</p>
                        <p class="datos">Katerin Torres</p>
                        <p class="datos">999 999 999</p>
                        <p class="datos">ktorres@kallpacorredoresdeseguros.pe</p>
                    </div>
                </div>
            </div>
        </section>
        
        <?php include 'inc/_footer.php'; ?>
        
        <script src="js/jquery.colorbox.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>