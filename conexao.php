<?php

$conn = new MySQLi('localhost', 'root', 'usbw', 'banco');
if ($conn->connect_error) {
    echo "Desconectado! Erro: " . $conn > connect_error;
}
?>
