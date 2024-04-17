<?php

include("con_db.php");


$error_message = "";
$success_message = "";

if($conexion) {
  $success_message = "Se conectó de forma correcta";
} else {
  $error_message = "Ocurrió un error";
}


if(isset($_POST['register']))
{
  if(strlen($_POST['name']) >= 1 && strlen($_POST['FechaNacimiento']) >= 1 && strlen($_POST['ocupacion']) >= 1 &&
    strlen($_POST['phone']) >= 1 && strlen($_POST['mail']) >= 1 && strlen($_POST['idioma']) >= 1 &&
    strlen($_POST['Nacionalidad']) >= 1 && !empty($_POST['Lenguajes']) && !empty($_POST['habilidades']) && strlen($_POST['Aptitud']) >= 1 && strlen($_POST['Perfil']) >= 1)
 {
    $nombre = $_POST['name'];
    $fecha_nacimiento = $_POST['FechaNacimiento'];
    $ocupacion = $_POST['ocupacion'];
    $telefono = $_POST['phone'];
    $email = $_POST['mail'];
    $idioma = $_POST['idioma'];
    $nacionalidad = $_POST['Nacionalidad'];
    $lenguajes = implode(",", $_POST['Lenguajes']);
    $aptitudes = $_POST['Aptitud'];
    $habilidades = implode(",", $_POST['habilidades']); 
    $perfil = $_POST['Perfil'];

    $consulta = "INSERT INTO datos (`nombre y apellidos`, `fecha de nacimiento`, `ocupacion`, `telefono`, `email`, `nacionalidad`, `nivel de ingles`, `lenguajes de programacion`, `aptitudes`, `habilidades`, `perfil`) VALUES ('$nombre', '$fecha_nacimiento', '$ocupacion', '$telefono', '$email', '$idioma', '$nacionalidad', '$lenguajes', '$aptitudes', '$habilidades', '$perfil')";

      $resultado = mysqli_query($conexion, $consulta);
    if($resultado)
    {
     
      $success_message = "Te registraste con éxito!";
      
    }
    else{
      
      $error_message = "Ocurrió un error al registrarte"; 
      
    }
    
    
  }
  else
  {
   
    $error_message = "Rellena todos los campos";
    
  }
}

?>