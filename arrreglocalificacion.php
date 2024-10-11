<!DOCTYPE html>
<html>
<head>
    <title>Calificaciones</title>
    <style type="text/css">
        .Img {
            position: absolute;
            top: 20px;
            right: 500px;
            width: 200px; 
        }
    </style> 
</head>
<body>
    <?php 
    echo '<img class="Img" src="https://www.olimpiadadeinformatica.org.mx/Resultados/img/escuelas/41.png" alt="Img">';

    $calificaciones = array(
        "Maria" => 10,
        "Jose" => 5,
        "Jazmin" => 9,
        "Angel" => 8,
        "Ceaser" => 6,
    );

    echo "<h1>Calificaciones</h1>";
    echo "<ul>"; 
    foreach ($calificaciones as $nombre => $calificacion) {
        echo "<li>$nombre: $calificacion</li>";
    }
    echo "</ul>"; 

    echo "<h1>Las Calificaciones Ordenadas:</h1>";
    asort($calificaciones);
    foreach ($calificaciones as $nombre => $calificacion) {
        echo "<li>$nombre: $calificacion</li>";
    }
    echo "</ul>"; 
    ?>
</body>
</html>