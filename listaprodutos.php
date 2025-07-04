<?php

include "cabecalho.php";

?>

<div class="container">
    <h2 class="text-center mt-3 fw-medium card-titulo">Todos os Produtos</h2>
    <div class="row">
        <?php
        
        include "conexao.php";
        $sql = "select * from farmacia order by nome asc";
        $resultado = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_assoc($resultado)) {
        ?>
            <div class="col-3 card-produto text-center mb-3">
                <img src="<?= $linha['foto_produto'] ?>" class="img-fluid capa-produto">
                <h3 class="nome-produto"><?php echo mb_strimwidth($linha['nome'], 0, 20, "...");
                    ?></h3>
                <p>R$<?= $linha['preco'] ?></p>
                <a href="umproduto.php?id=<?= $linha['id']; ?>" class="btn btn-primary">Veja detalhes</a>
            </div>
        <?php
        }

        mysqli_close($conexao);
        ?>

    </div>
</div>
<?php include "rodape.php"; ?>