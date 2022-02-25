<html>
<head>
    <title>Registrar</title> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
     <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form class="formulario" action = "login.php" method = "post">
    <h1>Se ha registrado correctamente</h1>
    </form>
</body>


<?php
$enlace = mysqli_connect("host.docker.internal", "root", "Modelo", "Client","3335");
$user = $_POST['usuario'];
$password = $_POST['contraseña'];

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
    }
    $sqlQuery = "INSERT INTO User (Email,Password) VALUES ('$user','$password');";
    $ob = mysqli_query($enlace,$sqlQuery);
    
?>

</html>

