<section class="banner-container">
    <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-003.jpg');" class="banner-single"></div>
    <!--banner-single-->
    <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-002.jpg');" class="banner-single"></div>
    <!--banner-single-->
    <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-001.jpg');" class="banner-single"></div>
    <!--banner-single-->
    <div class="overlay"></div><!--overlay-->
    <div class="center">
        <form action="">
            <h2>Lorem Ipsum Dolor</h2>
            <input type="email" name="email" required>
            <input type="submit" name="acao" value="Cadastrar!">
        </form>
        <div class="bullets"></div>
    </div><!--center-->
</section><!--banner-container-->
<section class="descricao-autor">
    <div class="center">
        <div class="w100 left">
			<h2 class="text-center"><img src="<?php echo INCLUDE_PATH ?>images/foto.jpg" /> <?php echo $infoSite['nome_autor']; ?></h2>
			<p><?php echo $infoSite['descricao']; ?></p>
		</div><!--w50-->

        <div class="clear"></div>
    </div><!--center-->
</section><!--descricao-autor-->
<section class="especialidades">
    <div class="center">
        <h2 class="title">Esspecialidades</h2>
        <div class="w33 left box-especialidade">
            <h3><i class="<?php echo $infoSite['icone1']; ?>"></i></h3>
            <h4><?php echo $infoSite['titulo1']; ?></h4>
            <p><?php echo $infoSite['descricao1']; ?></p>
        </div><!--box-especialidades-->
        <div class="w33 left box-especialidade">
            <h3><i class="<?php echo $infoSite['icone2']; ?>"></i></h3>
            <h4><?php echo $infoSite['titulo2']; ?></h4>
            <p><?php echo $infoSite['descricao2']; ?></p>
        </div><!--box-especialidades-->
        <div class="w33 left box-especialidade">
            <h3><i class="<?php echo $infoSite['icone3']; ?>"></i></h3>
            <h4><?php echo $infoSite['titulo3']; ?></h4>
            <p><?php echo $infoSite['descricao3']; ?></p>
        </div><!--box-especialidades-->
        <div class="clear"></div>
    </div><!--center-->
</section><!--especialidades-->
<section class="extras">
    <div class="center">
        <div id="depoimentos" class="w50 left depoimentos-container">
            <h2 class="title">Depoimentos dos nossos clientes</h2>
            <?php
                $sql = MySql::conectar()->prepare("SELECT * FROM `site.depoimentos` ORDER BY order_id ASC LIMIT 3");
                $sql->execute();
                $depoimentos = $sql->fetchAll();
                foreach ($depoimentos as $key => $value) {
            ?>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">"<?php echo $value['depoimento']; ?>"</p>
                    <p class="nome-autor"><?php echo $value['nome']; ?> - <?php echo $value['data']; ?></p>
                </div><!--depoimento-single-->
            <?php } ?>
        </div>
        <div id="servicos" class="w50 left servicos-container">
            <h2 class="title">Serviços</h2>
            <div class="servicos">
                <ul>
                    <?php
                        $sql = MySql::conectar()->prepare("SELECT * FROM `site.servicos` ORDER BY order_id ASC LIMIT 3");
                        $sql->execute();
                        $servicos = $sql->fetchAll();
                        foreach ($servicos as $key => $value) {
                    ?>
                        <li><?php echo $value['servicos']; ?></li>
                    <?php } ?>
                </ul>
            </div><!--servicos-->
        </div>
        <div class="clear"></div>
    </div><!--center-->
</section><!--extras-->