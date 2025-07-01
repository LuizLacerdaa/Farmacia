<?php

include "cabecalho.php";
include "banner.php";

?>

<div class="container mt-5">

    <h2 class="text-center">Medicamentos em Alta</h2>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
        include "conexao.php";

        $sql = "select * from farmacia where categoria = 'medicamentos'";
        $resultado = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_assoc($resultado)) {
        ?>
            <div class="col-3">
                <img src="<?= $linha['foto_produto'] ?>" class="img-fluid capa-produto">
                <h3><?= $linha['nome']; ?></h3>
                <span> R$<?= $linha['preco'] ?></span>
            </div>
        <?php
        }

        ?>

    </div>

</div>

<?php
include "rodape.php"
?>