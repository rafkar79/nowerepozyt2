<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <title> Sklep PE-FLEX </title>
        <meta name="description" content="Wentylacja mechaniczna PE-FLEX "/>
        <meta name="keywords" content="wentylacja, mechaniczna, pe-flex, rekuperator, instalacja" />
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <link rel="stylesheet" href="formularz.css" type="text/css"/>
        <link href='https://fonts.googleapis.com/css?family=Lato|Josefin+Sans&subset=latin,latin-ext'
        rel='stylesheet' type='text/css'>
    </head>
    <body>
       
        
        <div class="continer">
            <div class="naglowek">
                <div class="logo">
                    <img src="image/logo.jpg" />
                </div>
            </div>
            <div class="menu">
                <span style="letter-spacing: 4px"><i>  Systemy wentylacji mechanicznej </i></span>
            </div>
            <div class="content">
                <div class="komunikat">
                    <?php
                        session_start();
                        if(!empty($_SESSION['komunikat_logowanie'])){
                            if($_SESSION['komunikat_logowanie']=='TAK'){
                                echo 'Podałeś błędny login lub hasło';
                                $_SESSION['komunikat_logowanie']='NIE';
                            }  
                        }
                    ?>
                </div>
                <div class="logowanie">
                    <div class="formularz" style="text-align: center" >
                    <label>Zaloguj się</label> <br><br><br>
                    <form action="zalogujadmin.php" method="post">
                        <label>Login : </label>
                        <input class="text" type="text" name="login"/><br><br>
                         <label>Hasło : </label>
                        <input class="text" type="password" name="pass"/><br><br><br>
                        <input id="submit" type="submit" value="Zaloguj"/>
                    </form>
                </div>
                </div>
            </div>
            <div class="stopka">
                <span style="letter-spacing: 4px">   2016 &nbsp&nbsp&nbsp &COPY; &nbsp&nbsp&nbsp PE_FLEX &nbsp&nbsp&nbsp <i>Systemy wentylacji mechanicznej</i> 
                 &nbsp&nbsp&nbsp&nbsp&nbsp   tel.531 104 921 &nbsp&nbsp&nbsp e-mail biuro@termokontrol.com.pl</span>
            </div>
            
        </div>
        
        
    </body>
</html>
