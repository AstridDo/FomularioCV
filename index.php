<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content= "IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registro </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

	

  <form method="post">

   <h2> Inicia tu registro    </h2>
<?php   
include ("registrar.php");  
?>
<div class="message <?php echo $success_message ? 'success' : ''; ?>">
    <?php echo $success_message; ?>
</div>
<div class="message <?php echo $error_message ? 'error' : ''; ?>">
    <?php echo $error_message; ?>
</div>

    <div class="input-wrapper">
        <input type="text" name= "name" placeholder= "Nombre">
    </div>

    <div class="input-wrapper">
        <h5 class="contact-label">Fecha de nacimiento:</h5>
        <input type="date" name= "FechaNacimiento" placeholder= "Fecha de nacimiento"> 
    </div>

    <div class="input-wrapper">
        <input type="text" name= "ocupacion" placeholder= "Ocupacion">
    </div>

        <h5 class="contact-label">Contacto:</h5>

        <div class="input-wrapper">
            <input type="tel" name="phone" placeholder="Teléfono">
        </div>

        <div class="input-wrapper">
            <input type="email" name="mail" placeholder="Email">
        </div>

    <div class="input-wrapper">
      <br>Selecciona tu nivel de ingles:<br>
          <input type="radio" id="basico" name="idioma" value="basico">
          <label for="basico">basico</label><br>
          <input type="radio" id="intermedio" name="idioma" value="intermedio">
          <label for="intermedio">intermedio</label><br>  
          <input type="radio" id="avanzado" name="idioma" value="avanzado">
          <label for="avanzado">avanzado</label><br>
          <input type="radio" id="fluido" name="idioma" value="fluido">
          <label for="fluido">fluido</label><br><br>
    </div>

    <div class="input-wrapper">
        <de.label for="Nacionalidad">Seleccione su nacionalidad:</de.label>
        <select id="Nacionalidad" name="Nacionalidad">
          <option value="Peruano">Peruano</option>
          <option value="Chileno">Chileno</option>
          <option value="Argentino">Argentino</option>
          <option value="Mexicano">Mexicano</option>
          <option value="Boliviano">Boliviano</option>
          <option value="Estadounidense">Estadounidense</option>
          <option value="Canadiense">Canadiense</option>
        </select> <br> <br>
    </div>

    
<div class="input-wrapper">
    <de.label for="Lenguajes">Selecciona tus lenguajes de programacion:</de.label> <br>
    <select name="Lenguajes[]" id="Lenguajes" size="5" multiple>
        <option value="C++">C++</option>
        <option value="Python">Python</option>
        <option value="Java">Java</option>
        <option value="C#">C#</option>
        <option value="C">C</option>
        <option value="Fortran">Fortran</option>
        <option value="Javascrip">Javascrip</option>
        <option value="html">HTML</option>
    </select>
    <br><br>
</div>


    <div class="input-wrapper">
          <de.label for="Aptitud">Selecciona tus aptitudes:</de.label> <br>
          <input list="Aptitudes" name="Aptitud" id="Aptitud">
          <datalist id="Aptitudes">
            <option value="Multilingüismo"
            <option value="Resolución de problemas">
            <option value="Competencias digitales">
            <option value="Organización">
            <option value="Formación continua">
            <option value="Liderazgo">
            <option value="Creatividad">
            <option value="Adaptabilidad">
          </datalist>
    </div>

    <div class="input-wrapper">
      <br>Selecciona con que habilidades cuentas:<br>
          <input type="checkbox" id="habilidad1" name="habilidades[]" value="Persuasion">
          <label for="vehicle1"> Persuasión </label><br>
          <input type="checkbox" id="habilidad2" name="habilidades[]" value="VisiónEstrategica">
          <label for="vehicle2"> Visión estratégica </label><br>
          <input type="checkbox" id="habilidad3" name="habilidades[]" value="Paciencia">
          <label for="vehicle3"> Paciencia</label><br>
          <input type="checkbox" id="habilidad4" name="habilidades[] value="Comunicacion asertiva">
          <label for="vehicle1"> Comunicación asertiva</label><br>
          <input type="checkbox" id="habilidad4" name="habilidades[]" value="Disciplina">
          <label for="vehicle2"> Disciplina</label><br>
          <input type="checkbox" id="habilidad6" name="habilidades[]" value="Empatia">
          <label for="vehicle3"> Empatía</label><br><br>
    </div>

    <div class="input-wrapper">
      <de.label for="Perfil">Danos tu perfil:</de.label> <br>
      <textarea 
        name="Perfil" rows="10" cols="30"> 
      </textarea>
      <br><br>
    </div>
    

    <input class="btn" type="submit" name="register" value="Enviar">
    
  </form>





  
</body>

</html>