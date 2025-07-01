<?php
include "cabecalho.php";
include "banner.php";

?>
    <div class="container mt-5">

    <h2 class="row-cols-md-3 g-4">Medicamentos em Alta</h2>

    <div class="row mb-4">
        <?php
        include "conexao.php";

        $sql = "select * from farmacia where categoria = 'medicamentos'";
        $resultado = mysqli_query($conexao, $sql);

        // echo "<pre>";
        // print_r($resultado);
        // exit();

        while($linha = mysqli_fetch_assoc($resultado)){
            ?>
            <div class="col-3">
                <img src="<?=$linha['foto_produto']?>" class="img-fluid capa-filme">
                <h3><?=$linha['nome'];?></h3>
                <span> R$<?=$linha['preco']?></span>
            </div>
        <?php
        }

        ?>
        
    </div>

    </div>
    
    <?php
    include "rodape.php"
    ?>
