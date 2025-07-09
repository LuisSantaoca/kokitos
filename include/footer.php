V.231030
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de la Página</title>
</head>
<body>

<!-- Aquí va el contenido principal de tu página -->

<footer>
    <?php 
    if ($_SESSION["UserID"] == "santaoca") {
        echo '<img src="https://berrymotas.intelagro.com.mx/images/galex_logo.png" alt="Logo">';
    } 
    ?>
</footer>

</body>
</html>

