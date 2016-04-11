<?php

$gpio0  = "/sys/devices/virtual/gpio/gpio0/value";
$gpio7  = "/sys/devices/virtual/gpio/gpio7/value";
$gpio17 = "/sys/devices/virtual/gpio/gpio17/value";
$gpio26 = "/sys/devices/virtual/gpio/gpio26/value";
$gpio27 = "/sys/devices/virtual/gpio/gpio27/value";
$gpio29 = "/sys/devices/virtual/gpio/gpio29/value";

$gpios = array($gpio0,$gpio7,$gpio17,$gpio26,$gpio27,$gpio29);

function saklar($status,$gpio,$gpios){
  // mengirim value 0 : mati atau 1 : hidup
  if($status > 0){
    // hidup
    shell_exec("echo 1 > $gpios[$gpio]");
    header("location: index.html");
  }
  else{
    // mati
    shell_exec("echo 0 > $gpios[$gpio]");
    header("location: index.html");
  }
}

function semua($status,$gpios){
  // untuk menghidupkan atau mematikan semuanya
  if($status > 0 ){
    // hidupkan semua
    for($i = 0;$i<=count($gpios);$i++){
      shell_exec("echo 1 > $gpios[$i]");
    }
    header("location: index.html");
  }
  else{
    // matikan semua
    for($i = 0;$i<=count($gpios);$i++){
      shell_exec("echo 0 > $gpios[$i]");
    }
    header("location: index.html");
  }
}


if(isset($_POST['saklar'])){
  $status = $_POST['status'];
  $gpio   = $_POST['gpio'];
  saklar($status,$gpio,$gpios);
}
else if(isset($_POST['semua'])){
  $status = $_POST['status'];
  semua($status,$gpios);
}
?>
