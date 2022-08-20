<?php 
    include "header.php";
    include "dados.php";


    //conteudo de um array
    //echo"<pre>";
   // print_r($series);
   // echo"<pre>";
?>
<main>
    <h1>Séries em Destaque</h1>
    <div class="grid">
        <?php 
        $i =0;
        //ramdomizar o array
        shuffle($series);
        foreach ($series as $serie){
           
            $i++;

                if($i > 4) break;
            $id = $serie["id"];
            $nome = $serie["nome"];
            $imagem = $serie["imagem"];

            echo "<div class='coluna'>
            <img src=' imagens/{$imagem}'>
            
            <p><strong>{$nome}</strong><p/>
            <p>
                 <a href='serie.php?id={$id}'>
                    Detalhes
            </p>
                </a>
                </div>";
        }
        ?>
    </div>
</main>

<?php include "footer.php"; ?>
    
