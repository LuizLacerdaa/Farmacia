<?php 
include "cabecalho.php"; 

// 1 - recuperar o id
$id = $_GET['id'];
// 2 - conexao com bd
include "conexao.php";
// 3 - preparar sql
$sql = "select * from farmacia where id = $id ";

// 4 - executar sql
$resultado = mysqli_query($conexao, $sql);
// 5 - variaveis das informações do produto
$nome = "";
$descricao = "";
$categoria = "";
$preco = "";
$foto_produto = "";
// 6 - laço com as info do produto
while($linha = mysqli_fetch_assoc($resultado)){
    $nome = $linha["nome"];
    $descricao = $linha["descricao"];
    $categoria = $linha["categoria"];
    $preco = $linha["preco"];
    $foto_produto = $linha["foto_produto"];
}
// 7 - fechar conexão com bd
mysqli_close($conexao);

// 8 - mostrar na tela
?>
<div class="container">
    <div class="row mx-5 mt-5">
        <div class="col">
            <img src="<?=$foto_produto?>" class="img-fluid">
        </div>
        <div class="col">
            <h2 class="text-start"><?=$nome?></h2>
            <p><?=$descricao?></p>
            <p><strong>Categoria:</strong> <?=$categoria?></p>
            <p><strong>Preço: R$</strong> <?=$preco?></p>
        </div>
    </div>
</div>
<?php include "rodape.php"; ?>