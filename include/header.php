
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de la Página</title>
    <style>
        .reduced-img {
            width: 10%; /* Ajusta el ancho al 30% del tamaño original */
            height: auto; /* Mantiene la relación de aspecto */
        }
    </style>
</head>
<body>

<!-- Aquí va el contenido principal de tu página -->

<footer>
    <?php 
    if ($_SESSION["UserID"] == "santaoca") {
        echo '<img src="https://berrymotas.intelagro.com.mx/images/galex_logo.png" alt="Logo" class="reduced-img">';
    } 
    ?>
</footer>

</body>
</html>
