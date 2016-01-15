<?php
session_start();
$login = $_POST['login'];
$pasword = $_POST['pass'];


$dbc = new mysqli("localhost", "root","","sklepik");
 
 $query='SELECT Imie , Nazwisko , id_user FROM user WHERE login="'.$login.'" and password="'.$pasword.'" ;';
if($result=$dbc->query($query))	 
 {
    $ile= $result->num_rows;
    if($ile == 1){
        $wynik = $result->fetch_assoc(); 
        $_SESSION['imie']=$wynik["Imie"];
        $_SESSION['nazwisko']=$wynik["Nazwisko"];
        $_SESSION['id_user']=$wynik["id_user"];
        header('Location:administracja.php');
    }  else {
        $_SESSION['komunikat_logowanie']="TAK";
         header('Location:index.php');
    }
         
 }
$result->close();
$dbc->close();

?>