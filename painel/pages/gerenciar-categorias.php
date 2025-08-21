<?php
	if(isset($_GET['excluir'])){
		$idExcluir = intval($_GET['excluir']);
		Painel::deletar('site.categorias',$idExcluir);
		$noticias = MySql::conectar()->prepare("SELECT * FROM `site.noticias` WHERE categoria_id = ?");
		$noticias->execute(array($idExcluir));
		$noticias = $noticias->fetchAll();
		foreach ($noticias as $key => $value) {
			$imgDelete = $value['capa'];
			Painel::deleteFile($imgDelete);
		}
		$noticias = MySql::conectar()->prepare("DELETE FROM `site.noticias` WHERE categoria_id = ?");
		$noticias->execute(array($idExcluir));
		Painel::redirect(INCLUDE_PATH_PAINEL.'gerenciar-categorias');
	}else if(isset($_GET['order']) && isset($_GET['id'])){
		Painel::orderItem('site.categorias',$_GET['order'],$_GET['id']);
	}

	$paginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
	$porPagina = 4;
	
	$categorias = Painel::selectAll('site.categorias',($paginaAtual - 1) * $porPagina,$porPagina);
	
?>
<div class="box-content">
	<h2><i class="fa fa-id-card-o" aria-hidden="true"></i> Categorias Cadastradas</h2>
	<div class="wraper-table">
	<table>
		<tr>
			<td>Nome</td>
			<td><i class="fa-solid fa-pen-to-square"></i> Editar</td>
            <td><i class="fa-solid fa-trash"></i> Deletar</td>
			<td>#</td>
			<td>#</td>
		</tr>

		<?php
			foreach ($categorias as $key => $value) {
		?>
		<tr>
			<td><?php echo $value['nome']; ?></td>
			<td><a class="btn edit" href="<?php echo INCLUDE_PATH_PAINEL ?>editar-categoria?id=<?php echo $value['id']; ?>"><i
                                class="fa-solid fa-pen-to-square"></i></a></td>
			<td><a actionBtn="delete" class="btn delete" href="<?php echo INCLUDE_PATH_PAINEL ?>gerenciar-categorias?excluir=<?php echo $value['id']; ?>"><i
                                class="fa-solid fa-trash"></i></td>
			<td><a class="btn order" href="<?php echo INCLUDE_PATH_PAINEL ?>gerenciar-categorias?order=up&id=<?php echo $value['id'] ?>"><i class="fa fa-angle-up"></i></a></td>
			<td><a class="btn order" href="<?php echo INCLUDE_PATH_PAINEL ?>gerenciar-categorias?order=down&id=<?php echo $value['id'] ?>"><i class="fa fa-angle-down"></i></a></td>
		</tr>

		<?php } ?>

	</table>
	</div>

	<div class="paginacao">
		<?php
			$totalPaginas = ceil(count(Painel::selectAll('site.categorias')) / $porPagina);

			for($i = 1; $i <= $totalPaginas; $i++){
				if($i == $paginaAtual)
					echo '<a class="page-selected" href="'.INCLUDE_PATH_PAINEL.'gerenciar-categorias?pagina='.$i.'">'.$i.'</a>';
				else
					echo '<a href="'.INCLUDE_PATH_PAINEL.'gerenciar-categorias?pagina='.$i.'">'.$i.'</a>';
			}

		?>
	</div><!--paginacao-->


</div><!--box-content-->