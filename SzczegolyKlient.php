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
        <link rel="stylesheet" href="style3.css" type="text/css"/>
        <link rel="stylesheet" href="formularz.css" type="text/css"/>
        <link href='https://fonts.googleapis.com/css?family=Lato|Josefin+Sans&subset=latin,latin-ext'
        rel='stylesheet' type='text/css'>
   
    </head>
    <body>
        <?php 
        
       
        if(isset($_GET['id']))
            $id_klient=$_GET['id'];
        else 
            $id_klient=$_POST['id_klient'];
       
         $dbc = new mysqli("localhost", "root","","sklepik");
         $query='SELECT * FROM Klient WHERE id_klient='.$id_klient;
                            if($result=$dbc->query($query)){
                              $wiersz = $result->fetch_assoc(); 
                              $imie=$wiersz["Imie"];
                               $nazwisko=$wiersz["Nazwisko"];
                               $emial=$wiersz["e-mail"];
                               $typ_konta=$wiersz["Typ_konta"]; 
                               $nip =$wiersz['NIP'];
                               $firma=$wiersz['Firma'];
                               $telefon=$wiersz['Telefon'];
                               $id_adres=$wiersz['id_adres'];
                               $blokada=$wiersz['Blokada'];
                            }	 
           $query='SELECT * FROM adres WHERE id_adres='.$id_adres;                    
                           if($result=$dbc->query($query)){
                              $wiersz = $result->fetch_assoc(); 
                              $kraj=$wiersz['KRAJ'];
                              $miasto=$wiersz['Miasto'];
                              $ulica=$wiersz['Ulica'];
                              $kod_pocztowy=$wiersz['Kod_Pocztowy'];
                              $nr_domu=$wiersz['Nr_domu'];
                              $nr_lokalu=$wiersz['Nr_lokalu'];
                            }    
                                                          
        $result->close();
        $dbc->close();
        ?>
        <div class="continer">
            <div class="naglowek">
                <div class="logo">
                    <img src="image/logo.jpg" />
                </div>
            </div>
            <div class="menu">
                <ol>
                    <li><a href="administracja.php">Strona Główna</a></li>
                    <li><a href="#">Zamówienia</a>
                        <ul>
                            <li><a href="#">Nowe </a></li>
                            <li><a href="#">W trakcie</a></li>
                            <li><a href="#">Zakończone</a></li>
                            <li><a href="#">Historia</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Faktury</a>
                        <ul>
                            <li><a href="#">Proforma </a></li>
                            <li><a href="#">Opłacone</a></li>
                            <li><a href="#">Zatwierdzone</a></li>
                            <li><a href="#">Korekty</a></li>
                        </ul>
                    </li>
                   <li><a href="#">Proukty</a>
                        <ul>
                            <li><a href="#">Dodaj produkt</a></li>
                            <li><a href="ListaProduktow.php">Lista produktów</a></li>
                            
                        </ul>
                    <li><a href="#">Klienci</a>
                        <ul>
                            <li><a href="ListaKlientow.php">Lista klientów</a></li>
                            <li><a href="#">Dodaj kilenta</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php">Wyloguj</a></li>
                </ol>
            </div>
            <div class="content">
                <div class=naglowek2">
                    <div class="tytul"> Szczegóły klienta &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
                        <?php
                        if($blokada)
                            echo" <span style='color: red'><i>Konto zostało zablokowane</i></span>";
                        ?>
                       </div>
                     
                   
                </div>
                <div class="lista">
                    <div class="formularz">
                        <form action="#" method="post">
                            <label>Imie :</label>
                            <input class="text" type="text" name="imie" value=<?php echo $imie;?>><br>
                            <label>Nazwisko :</label>
                             <input class="text" type="text" name="Nazwisko" value=<?php echo $nazwisko;?>><br>
                             <label>e-mail :</label>
                             <input class="text" type="text" name="e-mail" value=<?php echo $emial;?>><br>
                            <label>Telefon :</label>
                            <input class="text" type="text" name="Telefon" value=<?php echo $telefon;?>><br>
                            <label>NIP :</label>
                            <input class="text" type="text" name="Kraj" value=<?php echo $nip;?>><br>
                            <label>Firma :</label>
                            <input class="text" type="text" name="Firma" value=<?php echo $firma;?>><br>
                            
                            <label>Typ konta :</label>
                             <select class="select" name="typ_konta" >
                                 <?php
                                 if($typ_konta=='FIRM'){
                                         echo"<option selected>Firma</option>";
                                         echo"<option >Prywatne</option>";
                                 }else{
                                     echo"<option >Firma</option>";
                                     echo"<option selected>Prywatne</option>";
                                 }
                                 ?>
                                         
                                         
                             </select><br>
                            <input id="submit" type="submit" value="AKTUALIZUJ"/>
                            
                            
                        </form>
                    </div>
                      <div class="formularz">
                        <form action="#" method="post">
                            <label>Kraj :</label>
                            <input class="text" type="text" name="imie" value=<?php echo $kraj;?>><br>
                             <label>Miasto :</label>
                             <input class="text" type="text" name="Nazwisko" value=<?php echo $miasto;?>><br>
                             <label>Kod pocztowy :</label>
                             <input class="text" type="text" name="e-mail" value=<?php echo $kod_pocztowy;?>><br>
                            <label>ulica :</label>
                            <input class="text" type="text" name="Telefon" value=<?php echo $ulica;?>><br>
                            <label>numer domu :</label>
                            <input class="text" type="text" name="Kraj" value=<?php echo $nr_domu;?>><br>
                            <label>numer lokalu :</label>
                            <input class="text" type="text" name="Firma" value=<?php echo $nr_lokalu;?>><br><br><br>
                            
                          
                           
                            <input id="submit" type="submit" value="AKTUALIZUJ"/>
                            
                            
                        </form>
                    </div>
                    <div class="formularz1">
                        <form action="#" method="post">
                            <input id="submit1" type="submit" value="Zamówienia klienta"/>
                                                       
                        </form>
                        <form action="#" method="post">
                          
                            <input type="hidden" name="id_klient" value=<?php echo $id_klient;?>>
                            <input id="submit1" type="submit" value="usuń konto"/>
                                                       
                        </form>
                        <form action="blokadakonta.php" method="post">
                            <input type="hidden" name="blokada" value="true">
                            <input type="hidden" name="id_klient" value=<?php echo $id_klient;?>>
                            <input id="submit1" type="submit" value="zablokuj konto"/>
                                                       
                        </form>
                        <form action="blokadakonta.php" method="post">
                            <input type="hidden" name="blokada" value="false">
                            <input type="hidden" name="id_klient" value=<?php echo $id_klient;?>>
                            <input id="submit1" type="submit" value="odblokuj konto"/>
                                                       
                        </form>
                        <form action="ListaKlientow.php" method="post">
                            <input id="submit1" type="submit" value="powrót"/>
                                                       
                        </form>
                    </div>
                    <div style="clear: both;"></div>
                   
                          
                </div>
                
            </div>
            <div class="stopka">
                <span style="letter-spacing: 4px">   2016 &nbsp&nbsp&nbsp &COPY; &nbsp&nbsp&nbsp PE_FLEX &nbsp&nbsp&nbsp <i>Systemy wentylacji mechanicznej</i> 
                 &nbsp&nbsp&nbsp&nbsp&nbsp   tel.531 104 921 &nbsp&nbsp&nbsp e-mail biuro@termokontrol.com.pl</span>
            </div>
            
        </div>
    </body>
</html>
