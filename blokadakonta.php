<?php
$dbc = new mysqli("localhost", "root","","sklepik");
 if($_POST['blokada']=='true'){
    $query='UPDATE klient SET Blokada=1 WHERE id_klient="'.$_POST['id_klient'].'"';      
}elseif($_POST['blokada']=='false'){
   $query='UPDATE klient SET Blokada=0 WHERE id_klient="'.$_POST['id_klient'].'"';       
}
 if($result=$dbc->query($query)){
                 }    

 $dbc->close();
$url ="Location:SzczegolyKlient.php?id=".$_POST['id_klient'];
header($url);

