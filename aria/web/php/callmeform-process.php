<?php
$errorMSG = "";

if (empty($_POST["nombre"])) {
    $errorMSG = "Name is required ";
} else {
    $nombre = $_POST["nombre"];
}

if (empty($_POST["teléfono"])) {
    $errorMSG = "teléfono es requerido ";
} else {
    $teléfono = $_POST["teléfono"];
}

if (empty($_POST["Correo_Electronico"])) {
    $errorMSG = "Correo_Electronico es requerido ";
} else {
    $Correo_Electronico = $_POST["Correo_Electronico"];
}

if (empty($_POST["seleccionar"])) {
    $errorMSG = "Seleccionar es requerido ";
} else {
    $seleccionar= $_POST["seleccionar"];
}

if (empty($_POST["terminos"])) {
    $errorMSG = "Terminos es requerido ";
} else {
    $terminos = $_POST["terminos"];
}

$EmailTo = "paraisotayrona5@gmail.com";
$Subject = "New quote request from Aria landing page";

// prepare email body text
$Body = "";
$Body .= "Nombre: ";
$Body .= $nombre;
$Body .= "\n";
$Body .= "teléfono: ";
$Body .= $teléfono;
$Body .= "\n";
$Body .= "Correo_Electronico: ";
$Body .= $Correo_Electronico;
$Body .= "\n";
$Body .= "Package: ";
$Body .= $seleccionar;
$Body .= "\n";
$Body .= "Terminos: ";
$Body .= $terminos;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$Correo_Electrinico);
// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}
?>