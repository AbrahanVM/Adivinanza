<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <script>
        function mostrarResultado(mensaje) {
            alert(mensaje);
            window.location.href = "index.html";
        }
    </script>
</head>
<body>
    <?php
    $correct_answer = "un parque";
    $user_answer = $_POST['answer'];

    if (strtolower($user_answer) == strtolower($correct_answer)) {
        echo "<script>mostrarResultado('¡Correcto! La respuesta es \"$correct_answer\".');</script>";
    } else {
        echo "<script>mostrarResultado('Lo siento, la respuesta no es correcta. Inténtalo de nuevo.');</script>";
    }
    ?>
</body>
</html>
