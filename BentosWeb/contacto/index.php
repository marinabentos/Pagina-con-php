<?php
$mysqli = new mysqli('localhost', 'root', '', 'paises');

if ($mysqli->connect_error) {
    die('Error de conexión (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel ="stylesheet" type="text/css" href="../css/style.css">
<meta charset="UTF-8">
<script src="../js/index.js"></script>
<title>Contacto</title>
</head> 
<body class ="body_contacto"> 
    <header>
        <div class="logo">
        <img src="l" alt="">
        <h2 class="nombre"> Marina Bentos Pollak </h2>
        </div>
        <div class="topnav" id="myTopnav">
            <nav>
                    <a href="../index.php">INICIO</a>
                    <a href="..\sobre_mi\index.php">SOBRE MI</a>
                    <a href="..\trabajos\index.php">TRABAJOS</a>    
                    <a href="#">CONTACTO</a> 
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>   
    </header>
    <div class="nav-responsive" onclick="mostrarOcultarMenu()">
    <i class="fa-solid fa-bars"></i>
    </div>
        <h2>Llegamos al final de la página!.</h2>
    <p>Si estás interesado en contactarte conmigo, podés dejar tus dátos en éste formulario.</p>  
 <div id="cuadrado"></div>
    <form>
        <label for="fname">Nombre:</label>
            <input type="text" id="fname" name="fname"><br><br>
            <label for="lname">Apellido:</label>
            <input type="text" id="lname" name="lname"><br><br>
            <label for="email">Email:</label>
            <input type="email"><br><br>
            <label for="descripcion">Si querés dejar tu comentario podés hacerlo acá:</label>
            <textarea rows="3" cols="30"></textarea><br><br>
            <select> 
       <option value="0" name ="pais">País</option> 
       <?php 
        $query = $mysqli -> query ("SELECT * FROM paises ORDER BY paisnombre");
        while ($valores = mysqli_fetch_array($query)) {
          echo '<option value="'.$valores['id'].'">'.$valores['paisnombre'].'</option>'; 
        } 
       ?> 
        </select> <br>
            <input type="submit">
   </form>     
   
</body>
</html>
