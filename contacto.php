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
                    <input type="text" name="nombre" placeholder="Nombre y Apellido (Obligatorio)">
                    <input type="text" name="empresa" placeholder="Emoresa">
                    <select name="asunto" id="asunto">
                        <option value="">-- Elije Asunto --</option>
                        <option value="">Seguro Vida</option>
                        <option value="">Seguro Accidental</option>
                        <option value="">Seguro Académico</option>
                        <option value="">Seguro Vehicular</option>
                        <option value="">Seguro Salud</option>
                        <option value="">Seguro Oncológico</option>
                        <option value="">SCTR</option>
                        <option value="">Seguro Incendio y lineas aliadas</option>
                        <option value="">Seguro Responsabilidad Civil</option>
                        <option value="">Seguro de Transporte </option>
                        <option value="">Ramos Técnicos (Seguro CAR - EAR - TREC - RM - TREE)</option>
                    </select>
                    <input type="tel" name="telefono" placeholder="Teléfono">
                    <input type="email" name="email" placeholder="E-mail (Obligatorio)">
                </div>

                <div id="textarea">
                    <textarea name="mensaje" placeholder="Mensaje (Obligatorio)"></textarea>
                </div>

                <div id="boton">
                    <input type="submit" id="btn" value="Enviar">
                </div>
            </form>
        </section>
        
        <section class="contenedor">
            <h2 class="titulo-informativo lt-100">Ubíquenos</h2>
            
            <div id="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.45446663541!2d-77.01434418518708!3d-12.081008991444493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c881b876539f%3A0xea0576fb277b8fd5!2sKallpa+Corredores+de+Seguros!5e0!3m2!1sen!2s!4v1496706235709" width="1200" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </section>
        
        <?php include 'inc/_footer.php'; ?>
        
        <script src="js/jquery.colorbox.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>