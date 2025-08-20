<?php
    $depoimentos = Painel::selectAll('site.depoimentos');
?>

<div class="box-content">
    <h2> <i class="fa-solid fa-message"></i> Depoimentos Cadastrados</h2>

    <table>
        <tr>
            <td><i class="fa-solid fa-signature"></i> Nome</td>
            <td><i class="fa-solid fa-comments"></i> Depoimento</td>
            <td><i class="fa-solid fa-calendar-days"></i> Data</td>
            <td><i class="fa-solid fa-pen-to-square"></i> Editar</td>
            <td><i class="fa-solid fa-trash"></i> Deletar</td>
        </tr>
        <?php foreach ($depoimentos as $key => $value){?>
        <tr>
            <td><?php echo $value['nome'] ?></td>
            <td><?php echo $value['depoimento'] ?></td>
            <td><?php echo $value['data'] ?></td>
            <td><a class="btn edit" href=""><i class="fa-solid fa-pen-to-square"></i></a></td>
            <td><a class="btn delete" href=""><i class="fa-solid fa-trash"></i></a></td>
        </tr>
        <?php } ?>
    </table>

</div><!--box-content-->