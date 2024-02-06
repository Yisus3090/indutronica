<?php
/* if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $name = $_POST["name"];
    $apellido = $_POST["apellido"];
    $phone = $_POST["phone"];
    $compañia = $_POST["compañia"];
    $pais = $_POST["pais"];
    $ciudad = $_POST["ciudad"];
    $email = $_POST["email"];
    $colores = $_POST["colores"];
    $comments = $_POST["comments"];

    // Crear el mensaje de correo
    $to = "indutronica@indutronica.com";
    $subject = "Nuevo formulario de contacto";
    $message = "Nombre: $name\nApellido: $apellido\nTeléfono: $phone\nCompañía: $compañia\nPaís: $pais\nCiudad: $ciudad\nEmail: $email\nÁrea de Interés: $colores\nComentarios: $comments";

    // Enviar el correo
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "¡El formulario se envió correctamente!";
    } else {
        echo "Error al enviar el formulario. Por favor, inténtalo de nuevo.";
    }
} else {
    // Si el formulario no se envió mediante POST, redirigir a la página de inicio o mostrar un mensaje de error
    header("Location: index.html");
    exit();
} */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $name = $_POST["name"];
    $apellido = $_POST["apellido"];
    $phone = $_POST["phone"];
    $compañia = $_POST["compañia"];
    $pais = $_POST["pais"];
    $ciudad = $_POST["ciudad"];
    $email = $_POST["email"];
    $colores = $_POST["colores"];
    $comments = $_POST["comments"];

	// Validar que el campo de teléfono solo contenga números
    if (!empty($phone) && !is_numeric($phone)) {
        echo "El campo de teléfono solo debe contener números.";
        exit();
    }

    // Validar los campos
    if (empty($name) || empty($apellido) || empty($compañia) || empty($pais) || empty($ciudad) || empty($email) || empty($comments)) {
        echo "Todos los campos marcados con * son obligatorios. Por favor, completa el formulario correctamente.";
        exit();
    }

    // Validar el formato del correo electrónico
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "El formato del correo electrónico no es válido. Por favor, proporciona una dirección de correo válida.";
        exit();
    }

	

    // Crear el mensaje de correo
    $to = "indutronica@indutronica.com";
    $subject = "Nuevo formulario de contacto";
    $message = "Nombre: $name\nApellido: $apellido\nTeléfono: $phone\nCompañía: $compañia\nPaís: $pais\nCiudad: $ciudad\nEmail: $email\nÁrea de Interés: $colores\nComentarios: $comments";

    // Enviar el correo
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "¡El formulario se envió correctamente!";
    } else {
        echo "Error al enviar el formulario. Por favor, inténtalo de nuevo.";
    }
} else {
    // Si el formulario no se envió mediante POST, redirigir a la página de inicio o mostrar un mensaje de error
    header("Location: index.html");
    exit();
}
?>

