<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nomape = $_POST["txtnomape"];
    $correo = $_POST["txtcorreo"];
    $telefono = $_POST["txttelefono"];
    $edad = $_POST["txtedad"];
    $sexo = $_POST["txtsexo"];
    $nacimiento = $_POST["txtnacimiento"];
    $grado = $_POST["txtgrado"];
    $consentimiento = isset($_POST["consentimiento"]) ? "Aceptado" : "No Aceptado";

    echo "########  Resultados  ########<br><br>";
    echo "Nombres y Apellidos: $nomape<br>";
    echo "Correo: $correo<br>";
    echo "Telefono: $telefono<br>";
    echo "Edad: $edad<br>";
    echo "Sexo: $sexo<br>";
    echo "Fecha de nacimiento: $nacimiento<br>";
    echo "Grado: $grado<br>";
    echo "Consentimiento: $consentimiento<br><br>";
    echo "########  Resultados  ########<br><br>";
    echo "<p>Regresar a la pagina de <a href='../layout/index.php'>Inicio</a></p>";

} 
else {
    echo "El formulario no se ha enviado correctamente.";
}

?>