<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <nav>
        <ul><li><a href="index.php">Contacto</a></li></ul>
        <ul><li><a href="info.html">Frameworks</a></li></ul>
        <ul><li><a href="Minijuego.html" target="_blank">Minijuego</a></li></ul>
    </nav>
    <section>
        <div class="cajita">
            <h4>Formulario</h4>
            <form  method="post" action="registrar.php">
            <input class="campo" type="text" name="nombre" placeholder="Ingrese su nommbre">
            <input class="campo" type="text" name="number" placeholder="Ingrese su numero celular">
            <input class="campo" type="email" name="email" placeholder="Ingrese su email">
            <input type="submit" id="registrar" name="register">
            </form>
        </div>
    </section>
</body>
</html>