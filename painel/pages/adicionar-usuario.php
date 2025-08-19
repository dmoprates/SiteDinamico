<?php
    verificaPermissaoPagina(1);

?>

<div class="box-content">
    <h2> <i class="fa-solid fa-pen-to-square"></i> Adicionar Usuário</h2>

    <form method="post" enctype="multipart/form-data">

        <?php
			
		?>
        <div class="form-group">
            <label>Login:</label>
            <input type="text" name="user" required >
        </div><!--form-group-->
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" name="nome" required >
        </div><!--form-group-->
        <div class="form-group">
            <label>Senha:</label>
            <input type="password" name="password" required >
        </div><!--form-group-->
        <div class="form-group">
            <label>Imagem:</label>
            <input type="file" name="imagem" required>
        </div><!--form-group-->
        <div class="form-group">
            <input type="submit" value="Atualizar" name="acao">
        </div><!--form-group-->
    </form>
</div><!--box-content-->