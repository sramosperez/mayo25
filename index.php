<?php
function procesarEmailFormulario(){

    $email =$_POST['email'] ?? '';
    if($email){
        echo "Email '". htmlspecialchars($email) . "' recibido con éxito.";
    }else {
        echo "Por favor, envía un email válido";
    }

}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    procesarEmailFormulario();
}

?>

<form method="POST">
    <input type="email" name="email" placeholder="tu.email@ejemplo.com" required>
    <button type="submit">Enviar </button>
</form>
