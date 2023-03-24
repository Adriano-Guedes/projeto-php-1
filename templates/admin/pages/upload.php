<?php

function upload(){
  $target_dir = "/SchoolOfNet/aulaPHP/P/public/upload";

  if(isset($_POST["envio"])) {
    $arq = $_FILES['arquivo'];
    
    for( $i=0 ; $i < count($arq['name']) ; $i++ ) {
      $target_file = $target_dir . $arq['name'][$i];

      if (move_uploaded_file($arq["tmp_name"][$i], $target_file)) {
        echo "upado com sucesso<br>";
      } else {
        echo "erro ao enviar";
      }
    }
  }
}

$arquivos = $_FILES['arquivo'];
var_dump($_FILES['arquivo']);

if($arquivos['type'][0] == "image/jpg"){ 
    upload();
}else if($arquivos['type'][0] == "image/png"){
    upload();
}else if($arquivos['type'][0] == "image/jpeg"){
    upload();
}else {
  die('Formato inválido<br>');
}
?>

