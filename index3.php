<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title> Sklep PE-FLEX </title>
    <meta name="description" content="Wentylacja mechaniczna PE-FLEX "/>
    <meta name="keywords" content="wentylacja, mechaniczna, pe-flex, rekuperator, instalacja" />
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link rel="stylesheet" href="css/fontello.css" type="text/css"/>
    <link href='https://fonts.googleapis.com/css?family=Lato|Josefin+Sans&subset=latin,latin-ext'
    rel='stylesheet' type='text/css'>
				
</head>
<body>
    <div id="continer" >
	<div class ="naglowek">	
        	<div id="logo">PE-FLEX</div>
		<div style="clear: both;"></div>
	</div>
	<div class="kwadrat1"> 
		<div class="menu1">PRZEWODY </br>WENTYLACYJNE</div>
		<div class="menu1">SKRZYNKI </br>ROZPRĘŻNE</div>
		<div class="menu1">SKRZYNKI </br>ROZDZIELACZOWE</div>
		<div class="menu1">OSPRZĘT I </br>AKCESORIA</div>
		<div class="menu3">PROJEKTY </br>WENTYLACJI</div>
		<div class="menu4">GWC</div>
	</div>
	<div class="kwadrat2">
		<div class="menu2"> 
                    <span color="red"></span>
                        <?php
                        session_start();
                        if(isset($_SESSION['komunikat_logowanie']))
                            echo $_SESSION['komunikat_logowanie'];
                        
                        ?>
                	</br></br> </br></br> ZALOGUJ SIĘ: </br></br>
			<form action="zalogujadmin.php" method="POST">
                        	  Login :
				  <input type="text" name="login"></imput></br></br>
				  Hasło :
				  <input type="text" name="pasword"> </imput></br></br>
				  <input type="submit" value="Zaloguj">
			</form>
						
		</div>
	</div>
	<div style="clear: both;"></div>
	<div class ="naglowek">	
		<div id="stopka">PE-FLEX Sklep &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  
			systemy wentylacji mechanicznej  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
			kontakt:  &nbsp &nbsp <i class="icon-phone"> </i> 555-789-452  &nbsp &nbsp <i class="icon-mail-alt"> </i> biuro@pe-flex.com </div>
	</div>
		
	
    </div>
</body>
</html>
