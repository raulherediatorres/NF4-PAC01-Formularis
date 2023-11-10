<?php
if(isset ($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $email = $_POST['email'];
    $edad = $_POST['edad'];

    echo  <<<ENDHTML
    <html>
    <body>
        <select id="escoger" name="escoger">
            <option value="nombre">$nombre</option>
            <option value="apellido">$apellido</option>
            <option value="apellido2">$apellido2</option>
            <option value="email">$email</option>
            <option value="edad">$edad</option>
        </select>
    </body>
    </html>
ENDHTML;
} else {
    echo "¿Te has equivocado?";
}
?>
