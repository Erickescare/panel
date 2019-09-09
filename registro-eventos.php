<?php
// Incluir archivo de configuración
require_once "inc/config.php";
 
// Definir variables e inicializar con valores vacíos
$name = $apellidos = $email = "";
$name_err = $apellidos_err = $email_err = "";
 
// Procesando datos del formulario cuando se envía el formulario
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Nombre Validar
	$input_name = trim($_POST["name"]);
	if(empty($input_name)){
		$name_err = "Por favor, introduzca un nombre ";
	} elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
		$name_err = "Por favor ingrese un nombre valido.";
	} else{
		$name = $input_name;
	}
	
	// Validar apellidos
	$input_apellidos = trim($_POST["apellidos"]);
	if(empty($input_apellidos)){
		$apellidos_err = "Por favor, introduzca un apellido. ";
	} else{
		$apellidos = $apellidos = $input_apellidos;
	}

    // Validar email
	$input_email = trim($_POST["email"]);
	if(empty($input_email)){
		$email_err = "Por favor, introduzca un email. ";
	} else{
		$email = $input_email;
	}

	// Validar evento
	$input_evento = trim($_POST["evento"]);
	if(empty($input_evento)){
		$evento_err = "Por favor, introduzca un evento. ";
	} else{
		$evento = $input_evento;
	}

    
    // Verificar errores de entrada antes de insertar en la base de datos
    if(empty($name_err)  && empty($apellidos_err)  && empty($password_err)  && empty($email_err)  && empty($evento_err)){
        
        // Prepara una declaración de inserción
        $sql = "INSERT INTO eventos_registros (name, apellidos, email, evento) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Vincula las variables a la declaración preparada como parámetros
            mysqli_stmt_bind_param($stmt, "ssss", $param_name, $param_apellidos, $param_email,  $param_evento);
            
            // Establecer parámetros
            $param_name = $name;
            $param_apellidos = $apellidos;
            $param_email = $email;
            $param_evento = $evento;
            
            // Intento de ejecutar la declaración preparada
            if(mysqli_stmt_execute($stmt)){
                // Redirigir a la página de inicio de sesión
                header("location: eventos-cc.php");
            } else{
                echo "Algo salió mal. Por favor, inténtelo de nuevo más tarde.";
            }
        }
         
        // Cerrar declaración
        mysqli_stmt_close($stmt);
    }

}
?>