<?php
require_once('db.php');
$email = $_POST['email3'];
$tel = $_POST['tel'];
$pass = $_POST['pass'];
$adres = $_POST['adres'];

if(empty($email) || empty($tel) || empty($pass) || empty($adres)){
    echo "Заполните все поля";
}
else{
    $sql = "INSERT INTO `users` (email, tel, pass, adres) VALUES ('$email', '$tel', '$pass', '$adres')";
    if($conn -> query($sql) == TRUE){
        echo "Успешно отправилось!";
    }
    else{
        echo "Ошибка: " . $conn->error;
    }
        
}    
?>