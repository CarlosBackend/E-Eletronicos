<?php require_once "public/shared/header.php";?>

<section class="car">
    <div class="container">
        <div class="box-6 mg-t-6">
            <form action="" method="post">
                <table class="car-table">
                    <thead>
                        <tr>
                            <th class="pd-10 bg-p2-azul fonte12 fnc-branco">Código</th>
                            <th class="pd-10 bg-p2-azul fonte12 fnc-branco">Produto</th>
                            <th class="pd-10 bg-p2-azul fonte12 fnc-branco">Qtde</th>
                            <th class="pd-10 bg-p2-azul fonte12 fnc-branco">Preço</th>
                            <th class="pd-10 bg-p2-azul fonte12 fnc-branco">Imagem</th>
                            <th class="pd-10 bg-p2-azul fonte12 fnc-branco">Sub-Total</th>
                            <th class="pd-10 bg-p2-azul fonte12 fnc-branco">Ação</th>
                        </tr>
                    </thead>
                    <!-- table data -->
                     <tbody>
                        <tr class="zebra">
                            <td class="fonte12 pd-5 txt-c"> <?= $_SESSION['carrinho']['id'];?></td>
                            <td class="fonte12 pd-5 txt-c"><?= $_SESSION['carrinho']['descricao'];?></td>
                            <td class="fonte12 pd-5 txt-c"><?= $_SESSION['carrinho']['qtde'];?></td>
                            <td class="fonte12 pd-5 txt-c"><?= 'R$'.number_format($_SESSION['carrinho']['preco'], 2,',','.');?></td>
                            <td class="fonte12 pd-5 txt-c">
                                <img src="lib/img/<?= $_SESSION['carrinho']['imagem'];?>" alt="" class="logo-60 mg-auto">
                            </td>
                            <td class="fonte12 pd-5 txt-c">000.00</td>
                            <td class="fonte12 pd-5 txt-c">
                                <a href="" class="txt-c flex justify-center item-centro">
                                    <i class="fa-solid fa-trash-can fonte22 fnc-error"></i>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="6">
                                <label for="">Selecionar Clientes</label>
                                <select name="cliente" id="" class="mg-b-2">
                                    <option value="">Selecione um cliente</option>
                                    <option value="">Ciclano</option>
                                    <option value="">Fulano</option>
                                </select>
                            
                                <label for="">Forma de pagamento</label>
                                <select name="cliente" id="" clas="mg-b-2>
                                    <option value="">Selecionar pagamento</option>
                                    <option value="">Boleto</option>
                                    <option value="">Pay Pal</option>
                                    <option value="">Cartão de crédito</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="7">
                                <a href="index.php?arquivo=Controlador&metodo=index" class="btn-100 bg-p1-amarelo mg-b-1 fnc-branco fonte14">Comprar Mais</a>
                                <input type="submit" value="Finalizar" class="btn-100 bg-p1-amarelo fnc-branco">
                            </td>
                        </tr>
                     </tbody>
                </table>
            </form>
        </div>
    </div>
</section>

<?php require_once "public/shared/footer.php";?>

