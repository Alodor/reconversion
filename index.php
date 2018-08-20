<!Doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <link rel="stylesheet" href="assets/css/style.min.css">
        <link rel="icon" href="assets/images/favicon.png">
        <title>Calculadora | Reconversión Monetaria</title>
    </head>
    
    <body>
        <!-- Hero -->
        <header class="hero">
            <div class="hero__filter">
                <div class="container">
                    <h1 class="hero__title">Con esta herramienta te ahorras el dolor de cabeza causado por la nueva reconversión monetaria</h1>      
                </div>  
            </div>            
        </header>
        <!-- /Hero -->
        
        <!-- Content -->
        <section class="content">
            <div class="container">
                <div class="container--image">
                    <img class="image-responsive" src="assets/images/reconversion.png">
                </div>
                <div class="container--text">
                    <h3 class="content__title">Sólo ingresa el valor en la caja de contenido y automáticamente la herramienta hace el cálculo por ti. <br><span>¡Pruébala Ahora!</span></h3>
                </div>
                <div class="container--form">
                    <input id="valor" class="input" type="text" placeholder="Ingrese valor" required>
                    <button id="calcular" class="btn" type="submit">Calcular</button>
                    
                    <!-- Response -->
                    <div class="container--response">
                        <span id="response"></span>
                    </div>
                    <!-- /Response -->
                </div>
            </div>
        </section>
        <!-- /Content -->
        
        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <p>Desarrollado por Alodor. <?php echo date('Y') ?></p>
            </div>
        </footer>
        <!-- /Footer -->
       
        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="assets/js/function.js"></script>
        <!-- /Scripts -->
    </body>
</html>