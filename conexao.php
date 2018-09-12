<?php
$link = mysql_connect('127.0.0.1:56100', 'azure', '6#vWHD_$');
if (!$link) {
    die('Erro ao conectar ao banco: ' . mysql_error());
}
echo 'Conectado com sucesso';
mysql_close($link);
?>