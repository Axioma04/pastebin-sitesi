<?php
try{
    $vt = new PDO("mysql:host=localhost;dbname=veritabanıadi;charset=utf8;", "kullaniciadi", "sifre");
}catch(PDOExeption $error){
    echo $error->getMessage();
}
?>