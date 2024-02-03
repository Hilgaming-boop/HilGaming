<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "albertohilton66@gmail.com";
    $subject = "Novo Formulário de Contato";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
}
?>