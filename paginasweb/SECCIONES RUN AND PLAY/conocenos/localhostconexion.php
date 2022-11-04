<?php
$mysqli = new mysqli("127.0.0.1", "root", "123456", "datos", 3307);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo  "$mysqli->host_info\n";
echo  "<p>servidor conectado</p>\n";
?>