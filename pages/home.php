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
        <div class="w50 left">
            <h2>Lorem Ipsum Dolor</h2>
            <p>
                Sit occaecat dolore sunt dolore occaecat aute aliqua Lorem. Fugiat ut dolore ex eu.
                Ea do excepteur labore pariatur consequat reprehenderit proident id ex. Elit duis
                ut est in labore. Do duis enim ut aliquip adipisicing fugiat. Sit qui qui mollit
                et et deserunt aliqua sunt. Occaecat veniam labore aliqua adipisicing consequat anim
                ea laborum amet duis. Lorem irure magna ad incididunt pariatur duis in minim enim
                veniam incididunt aliquip. Ex fugiat magna culpa sunt incididunt consectetur pariatur
                laboris amet. Magna ex ullamco minim ut dolore amet culpa Lorem voluptate sint. Mollit
                amet est ex deserunt magna est deserunt exercitation deserunt.
            </p>
            <p>
                Sit occaecat dolore sunt dolore occaecat aute aliqua Lorem. Fugiat ut dolore ex eu.
                Ea do excepteur labore pariatur consequat reprehenderit proident id ex. Elit duis
                ut est in labore. Do duis enim ut aliquip adipisicing fugiat. Sit qui qui mollit
                et et deserunt aliqua sunt. Occaecat veniam labore aliqua adipisicing consequat anim
                ea laborum amet duis. Lorem irure magna ad incididunt pariatur duis in minim enim
                veniam incididunt aliquip. Ex fugiat magna culpa sunt incididunt consectetur pariatur
                laboris amet. Magna ex ullamco minim ut dolore amet culpa Lorem voluptate sint. Mollit
                amet est ex deserunt magna est deserunt exercitation deserunt.
            </p>
        </div><!--w50-->
        <div class="w50 left">
            <img class="right" src="<?php echo INCLUDE_PATH; ?>images/foto.jpg" alt="User image">
        </div>
        <div class="clear"></div>
    </div><!--center-->
</section><!--descricao-autor-->
<section class="especialidades">
    <div class="center">
        <h2 class="title">Esspecialidades</h2>
        <div class="w33 left box-especialidade">
            <h3><i class="fa-brands fa-css3"></i></h3>
            <h4>CSS3</h4>
            <p>Lorem id nisi dolor aute excepteur ut pariatur commodo duis nostrud ut amet incididunt Lorem.</p>
        </div><!--box-especialidades-->
        <div class="w33 left box-especialidade">
            <h3><i class="fa-brands fa-html5"></i></h3>
            <h4>HTML5</h4>
            <p>Lorem id nisi dolor aute excepteur ut pariatur commodo duis nostrud ut amet incididunt Lorem.</p>
        </div><!--box-especialidades-->
        <div class="w33 left box-especialidade">
            <h3><i class="fa-brands fa-js"></i></h3>
            <h4>JavaScript</h4>
            <p>Lorem id nisi dolor aute excepteur ut pariatur commodo duis nostrud ut amet incididunt Lorem.</p>
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