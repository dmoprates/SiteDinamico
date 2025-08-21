<?php
if (isset($_GET['excluir'])) {
    $idExcluir = intval($_GET['excluir']);
    Painel::deletar('site.depoimentos', $idExcluir);
    Painel::redirect(INCLUDE_PATH_PAINEL . 'listar-depoimentos');
} else if(isset($_GET['order']) && isset($_GET['id'])){
		Painel::orderItem('site.depoimentos',$_GET['order'],$_GET['id']);
	}


$paginaAtual = isset($_GET['pagina']) ? (int) $_GET['pagina'] : 1;
$porPagina = 4;
$depoimentos = Painel::selectAll('site.depoimentos', ($paginaAtual - 1) * $porPagina, $porPagina * $paginaAtual);

?>

<div class="box-content">
    <h2> <i class="fa-solid fa-message"></i> Depoimentos Cadastrados</h2>

    <div class="wraper-table">
        <table>
            <tr>
                <td><i class="fa-solid fa-signature"></i> Nome</td>
                <td><i class="fa-solid fa-comments"></i> Depoimento</td>
                <td><i class="fa-solid fa-calendar-days"></i> Data</td>
                <td><i class="fa-solid fa-pen-to-square"></i> Editar</td>
                <td><i class="fa-solid fa-trash"></i> Deletar</td>
                <td>#</td>
                <td>#</td>
            </tr>
            <?php foreach ($depoimentos as $key => $value) { ?>
                <tr>
                    <td><?php echo $value['nome'] ?></td>
                    <td><?php echo $value['depoimento'] ?></td>
                    <td><?php echo $value['data'] ?></td>
                    <td><a class="btn edit"
                            href="<?php echo INCLUDE_PATH_PAINEL ?>editar-depoimento?id=<?php echo $value['id']; ?>"><i
                                class="fa-solid fa-pen-to-square"></i></a></td>
                    <td><a actionBtn="delete" class="btn delete"
                            href="<?php echo INCLUDE_PATH_PAINEL ?>listar-depoimentos?excluir=<?php echo $value['id']; ?>"><i
                                class="fa-solid fa-trash"></i></a></td>
                    <td><a class="btn order"
                            href="<?php echo INCLUDE_PATH_PAINEL ?>listar-depoimentos?order=up&id=<?php echo $value['id'] ?>"><i
                                class="fa-solid fa-angle-up"></i></a></td>
                    <td><a class="btn order"
                            href="<?php echo INCLUDE_PATH_PAINEL ?>listar-depoimentos?order=down&id=<?php echo $value['id'] ?>"><i
                                class="fa-solid fa-angle-down"></i></a></td>
                </tr>
            <?php } ?>
        </table>
    </div><!--wraper-table-->
    <div class="paginacao">
        <?php
        $totalPaginas = ceil(count(Painel::selectAll('site.depoimentos')) / $porPagina);
        for ($i = 1; $i <= $totalPaginas; $i++) {
            if ($i == $paginaAtual)
                echo '<a class="page-selected" href="' . INCLUDE_PATH_PAINEL . 'listar-depoimentos?pagina=' . $i . '">' . $i . '</a>';
            else
                echo '<a href="' . INCLUDE_PATH_PAINEL . 'listar-depoimentos?pagina=' . $i . '">' . $i . '</a>';
        }
        ?>
    </div><!--paginacao-->

</div><!--box-content-->