<?php
include "header.php";
include "dados.php";

//recuperar o id enviado por get

$id = $_GET["id"] ?? NULL;

//verificar se o id esta em branco

if(empty ($id)){
    echo"<script>alert('Série não encontrada');history.back();</script>";
    exit;
}


$nome = $series[$id]["nome"];
$imagem = $series[$id]["imagem"];
$sinopse = $series[$id]["sinopse"];
?>
<main>
  <div class="grid-2">
    <div class="coluna">
        <img src="imagens/<?=$imagem?>">
  </div> 
  <div class="coluna">
            <h2><?=$nome?></h2>
            <P><strong>Sinopse:</strong></P>
            <p><?=$sinopse?></p>
        </div>
 
</main>

<?php include "footer.php"; ?>