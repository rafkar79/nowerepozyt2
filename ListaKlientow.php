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
        <link rel="stylesheet" href="style2.css" type="text/css"/>
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
                    <div class="tytul"> Lista Klientów</div>
                    <div class="szukaj"> 
                        <form  action="zalogujadmin.php" method="post">
                        szukaj:
                            <input type="text" name="szukana"/>&nbsp&nbsp
                            wegług:&nbsp&nbsp
                            <select name="nazwa">
                                <option>nazwisko</option>
                                <option>imie</option>
                                <option>e-mail</option>
		
                            </select>&nbsp&nbsp
                            <input type="submit" value="Szukaj"/>
                        </form>
                </div>
                   
                </div>
                <div class="lista">
                    <table>
                        <tr>
                            <th>Id</th><th>Imię</th><th>Nazwisko</th><th>e-mail</th><th>Typ</th><th>Rejestracja</th><th>Ost. wizyta</th><th>akcja</th><th></th><th></th>
                        </tr>
                        <?php 
                           $dbc = new mysqli("localhost", "root","","sklepik");
                           $query='SELECT * FROM Klient';
                            if($result=$dbc->query($query)){	 
                                $ile= $result->num_rows;
                                for($i=0;$i<$ile;$i++){
                                $wiersz = $result->fetch_assoc(); 
                               echo" <tr>";
                               echo" <td>".$wiersz["id_klient"]."</td><td>".$wiersz["Imie"]."</td><td>".$wiersz["Nazwisko"].
                                       "</td><td>".$wiersz["e-mail"]."</td><td>".$wiersz["Typ_konta"].
                                       "</td><td>".$wiersz["Data_utworzenia"]."</td><td>".$wiersz["Data_Logowania"]."</td>";
                               ?>
                                 <td>
                                     <form  action="SzczegolyKlient.php" method="post">
                                    <input type="hidden" name="id_klient" value="<?php echo $wiersz['id_klient'];?>" />
                                      <input type="submit" value="Szczegóły"/>
                                 </form>
                                 </td>
                                 <td>
                                <form  action="zalogujadmin.php" method="post">
                                      <input type="submit" value="Usuń"/>
                                 </form>
                                 </td>
                                 <td>
                                <form  action="zalogujadmin.php" method="post">
                                      <input type="submit" value="Zamówienia"/>
                                 </form>
                                 </td>
                                </tr>
                                <?php
                                }
         
                            }
                           $result->close();
                           $dbc->close();
                        ?>
                         
                        
                    </table>
                </div>
                
            </div>
            <div class="stopka">
                <span style="letter-spacing: 4px">   2016 &nbsp&nbsp&nbsp &COPY; &nbsp&nbsp&nbsp PE_FLEX &nbsp&nbsp&nbsp <i>Systemy wentylacji mechanicznej</i> 
                 &nbsp&nbsp&nbsp&nbsp&nbsp   tel.531 104 921 &nbsp&nbsp&nbsp e-mail biuro@termokontrol.com.pl</span>
            </div>
            
        </div>
    </body>
</html>
