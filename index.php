<?php

include "cabecalho.php";
include "banner.php";

?>

<div class="container mt-5">

    <h2 class="text-center card-titulo">Medicamentos em Alta</h2>

    <div class="row row-cols-md-3 g-2">
        <?php
        include "conexao.php";

        $sql = "select * from farmacia where categoria = 'medicamentos'";
        $resultado = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_assoc($resultado)) {
        ?>
            <div class="col-3 card-produto">
                <img src="<?= $linha['foto_produto'] ?>" class="img-fluid capa-produto">
                <h3 class="nome-produto"><?= $linha['nome']; ?></h3>
                <span> R$<?= $linha['preco'] ?></span>
                <a href="umproduto.php?id=<?= $linha['id']; ?>" class="btn btn-primary">Veja detalhes</a>
            </div>
        <?php
        }

        ?>

    </div>

</div>

<?php
include "rodape.php"
?>