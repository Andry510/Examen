<html>
<head>
	<title>Registrar</title> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
     <link rel="stylesheet" href="estilos.css">
	
</head>  

<body>
    <form class="formulario" action = "login.php" method = "post">
    <h1>Bienvenido</h1>
     <div class="contenedor">
     
     
         <!-- Correo -->
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" placeholder="Correo Electronico" name = "usuario">
         </div>

         <!-- contraseña -->
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
        <input type="password" placeholder="Contraseña" name = "contraseña">
         </div>

         <!-- Boton -->
         <input type="submit" value="Registrar" class="button">
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>         
     </div>
    </form>
</body>

</html>