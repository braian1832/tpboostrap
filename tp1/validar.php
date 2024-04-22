<?php
$user="yato";
$cta="god";
$user2;
$cta2;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user2 = $_POST["user2"];
    $cta2 = $_POST["cta2"];
  }
if (isset ($_POST["ingresar"]) && ($cta==$cta2) && ($user==$user2))
    echo "Bienvenido " . $user ;

    
else{

header("Refresh: 3; url=login.html");
echo "contraseña y/o user incorrectas. Intente nuevamente.";

}












?>