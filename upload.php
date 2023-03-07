<?php
$pasta = "img/";
$nomeDoArquivo = $_FILES["arquivo"]["name"];
$partes = explode(".",$nomeDoArquivo);
$nomeNovo = round(microtime(true)) . "." . end($partes);
echo $nomeNovo;


move_uploaded_file($_FILES["arquivo"]["tmp_name"],$pasta . $nomeNovo);
?>
<img src="<?php echo $pasta . $nomeNovo; ?>">