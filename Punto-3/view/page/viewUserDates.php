<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/stylesPoint3.css">
    <title>Vista de Datos</title>
</head>
<body>
    <?php include "../components/dates.php"; ?>
    <p><b>Nombre:</b> <?php echo $userName  ?></p>
    <p><b>Apellido:</b> <?php echo $lastName  ?></p>
    <p><b>Número de identificación:</b> <?php echo $userId  ?></p>

    <a href="../../index.php" > Regresar</a>

</body>
</html>