<?php
    $Usuario= (int) (isset($_REQUEST['usuarios'])) ? $_REQUEST['usuarios'] : 0;
    switch ($Usuario) {
        case '1': echo "Hola Miguel, bienvenido a tu mes de prueba."; goto pasar;
        case '2': echo "Hola Jaime, tu membresia esta activa."; goto pasar;
        case '3': echo "Hola Diana, te quedan 10 dias de membresia "; goto pasar;
        case '4': echo "Hola Jose, tu membresia termina mañana"; goto pasar;
        pasar:
        echo "<br>Tu opcion es $Usuario, disfruta de tu contenido";
           break;
        
        default:
          echo "El Usuario aun no ha sido registrado.";
         break;
    }

    echo '<hr><a href="index.html">Volver</a>';
?>