<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>septimopunto</title>
</head>
<body>
    <form action="calificacionfinal.php"method="post">
        <label for="">nom_aprendiz</label><input type="text" name="nom_aprendiz">
        <label for="">asignatura</label><input type="text" name="asignatura">
        <label for="">Calificación final</label><input type="number" name="Calificacion_final" min = "1" max = "10">


        <input type="submit" value="enviar">
    </form>
</body>
</html>