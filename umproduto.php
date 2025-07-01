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
$fabricante = "";

// 6 - laço com as info do produto
while($linha = mysqli_fetch_assoc($resultado)){
    $nome = $linha["nome"];
    $descricao = $linha["descricao"];
    $categoria = $linha["categoria"];
    $preco = $linha["preco"];
    $foto_produto = $linha["foto_produto"];
    $fabricante = $linha["fabricante"];
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
            <p><strong>Fabricante:</strong> <?=$fabricante?></p>
            <p><strong>Preço: R$</strong> <?=$preco?></p>
            

            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  COMPRAR PRODUTO
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">ENTRE EM CONTATO</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Para comprar, acesse um de nossos canais de atendimento <br>
        ☎ (19) 3460-4040 <br>
        📞 (19) 99125-2525 <br>
        ✉ Farma@farmacia.com.br 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Irei entrar em contato</button>
      </div>
    </div>
  </div>
</div>
        </div>
    </div>
</div>
<?php include "rodape.php"; ?>