<?php
session_start();

switch($_GET["operation"]){
    case "login":
        login();
        break;
        case "logout":
            logout();
            break;
            default;
            $_SESSION["msg_warning"] = "Operação Inválida!!!";
            header("../View/message.php");
}

function login(){
$users = array(
    array(
        "name" => "Pedro",
        "email" => "pedro@gmail.com.br",
        "password" => password_hash("123456", PASSWORD_DEFAULT)
    ),

    array(
        "name" => "Maria",
        "email" => "maria@gmail.com.br",
        "password" => password_hash("123456", PASSWORD_DEFAULT)
    ),
);
    
if(empty($_POST)){
    $_SESSION["msg_error"] = "Deu ruim";
    header("location:../View/message.php");
    exit;
}

$email = $_POST["user_email"];
$pass = $_POST["user_password"];

foreach($users as $user){
    echo $user["email"], " ", $user["password"] ,"<br>";
}

foreach($users as $user){
    if($email == $user["email"] && password_verify( $pass, $user["password"] ) ){
        $_SESSION["user_data"] = $user;
        header("location:../View/dashboard.php");
        exit;
    }
}

$_SESSION["msg_warning"] = "Lamento, usuário não encontrado :(";
header("location:../View/message.php");
}

function logout(){
    unset($_SESSION["user_data"]);
    header("location:../index.html");
    exit;
}


?>