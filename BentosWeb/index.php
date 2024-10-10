<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <script src="js/index.js"></script>


    <title>Pagina Bentos</title>
    <script>
        alert("Recordá registrarte si no tenés una cuenta")
    </script>
    <script
      src="https://kit.fontawesome.com/7e5b2d153f.js"
      crossorigin="anonymous"
    ></script>
</head>
<body class="body_inicio"></body>
        <header>
            <div class="logo">
              <img src="logom.jpg" alt="logo">
                <h2 class="nombre"> Marina Bentos Pollak </h2>
            </div> 
            <div class="topnav" id="myTopnav">
            <nav>
                    <a href="#">INICIO</a>
                    <a href=".\sobre_mi\index.php">SOBRE MI</a>
                    <a href=".\trabajos\index.php">TRABAJOS</a>    
                    <a href=".\contacto\index.php">CONTACTO</a> 
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>   
        </header>
      </div>

      
    <div class ="main">
        <h1>Bienvenidos!</h1>
        <p>En esta pagina encontraras algunos de mis proyectos</p>
        <br>
    </div>

    <form action="/action_page.php">
         <label for="Usuario"> Usuario:</label>
         <input type="text" id="usuario"  placeholder="Ingresar Usuario"><br><br>
         <label for="password">Contraseña:</label>
         <input type="password" id="Contraseña" placeholder="Ingresar Contraseña" required><br><br>
         <br>
         <br>
                <div class="registrarte">
                 <a href="#"><p>Registrarse</p></a>
                </div>
                <button onclick="validarFormulario()">Enviar</button>
            <script>
                function validarFormulario() {
                  const usuario = document.getElementById('usuario').value;
                  const Contraseña = document.getElementById('Contraseña').value;
              
                  if (usuario.trim() === '') {
                    document.getElementById('usuario').style.borderColor = 'red';
                  } else {
                    document.getElementById('usuario').style.borderColor = 'initial';
                  }
              
                  // Validación de correo electrónico (puedes usar una expresión regular)
                  const ContraseñaValida = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
                  if (!ContraseñaValida.test(Contraseña)) {
                    document.getElementById('Contraseña').style.borderColor = 'red';
                  } else {
                    document.getElementById('').style.borderColor = 'initial';
                    document.getElementById('Contraseña').style.borderColor = 'initial';
                  }
                }
              </script>
          </form>

        
</body>

</html>
