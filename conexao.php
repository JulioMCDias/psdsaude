<?
$servidor = '127.0.0.1:56100';
$banco = 'psdsaude';
$usuario = 'azure';
$senha = '6#vWHD_$';
$link = mysql_connect($servidor, $usuario, $senha);
$db = mysql_select_db($banco,$link);
if(!$link)
{
    echo "erro ao conectar ao banco de dados!";exit();
}
?>