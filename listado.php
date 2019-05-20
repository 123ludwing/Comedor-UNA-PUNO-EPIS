<?php
    session_star();
    include    'cn/on.php';
    $sql = "select * from cliente";
    $result = $conexion ->query($sql);

    echo "<table>";
    echo "<thead>";
    echo "<th>#</th><th>Nombre</th>";
    
    $i = 1;
    while($row = $result->fetch_array()){
        echo "<tr><td>" $i ++ "<td><td" $row['nombre']"
        </td></tr>";
    }		
?>