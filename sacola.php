<?php
if (isset($_SESSION['Carrinho'])) { ?>
<form method="post">
    <input class="btn btn-danger" type="submit" name="limpar_carrinho" value="Limpar carrinho">
</form>
<hr>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Descricao</th>
            <th scope="col">Valor</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row"><?php echo $produto['id']; ?></th>
            <td><?php echo $produto['descricao']; ?></td>
            <td><?php echo $produto['valor']; ?></td>
            <td>
                <form method="POST">
                    <input type="hidden" name="produto" value="<?php echo $item; ?>">
                    <input class="btn btn-danger" type="submit" name="remover_sacola" value="Cancelar">
                </form>
            </td>
        </tr>
    </tbody>
</table>

<a class="btn btn-primary" href="?pagina=realizar_pedido">finalizar pedido</a>


<?php } else {echo '<h3>Você ainda não tem produtos na Sacola!';}
?>
