<?php

$host = "localhost";
$user = "root";
$pass = "";
$banco = "login";
$charset = "utf8";

$connection = @mysqli_connect($host, $user, $pass, $banco ) or die ("Problemas com a conexao do Banco de Dados");

$email = $_POST['email'];
$password = $_POST['password'];

$sqlinsert = "INSERT into users (email, password_) values
('$email', '$password')";

$result = @mysqli_query($connection, $sqlinsert);
if (!$result){
die('Query Invalida: ' . @mysqli_error($conecction));

}else {
    echo "Registered successfully";
}
mysqli_close($connection);

?>