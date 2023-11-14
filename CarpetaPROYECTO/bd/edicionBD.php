<?php 

    include (connection());

    $consulta="SELECT * FROM cuenta";
        $resultado = mysqli_query($con, $consulta);
        while($fila = mysqli_fetch_array($resultado)){
            echo'<tr>';
            echo'<td>'.$fila['nomb'].'</td>';
            echo'<td>'.$fila['apell'].'</td>';
            echo'<td>'.$fila['C.I'].'</td>';
            echo'<td>'.$fila['fecNac'].'</td>';      
            echo'</tr>';

        }
        echo "Numero de registros: ".mysqli_num_rows($resultado);
        