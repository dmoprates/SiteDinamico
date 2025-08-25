<?php
	$url = explode('/',$_GET['url']);
	if(!isset($url[2]))
	{
?>

<section class="header-noticias">
    <div class="center">
        <h2><i class="fa-solid fa-newspaper"></i></h2>
        <h2>Acompanhe as últimas notícias do portal</h2>
    </div><!--center-->
</section>

<section class="container-portal">
    <div class="center">
        <div class="sidebar">
            <div class="box-content-sidebar">
                <h3><i class="fa-solid fa-magnifying-glass"></i> Realizar uma busca</h3>
                <form>
                    <input type="text" name="busca" placeholder="O que deseja procurar?" required>
                    <input type="submit" value="Pesquisar!" name="acao">
                </form>
            </div><!--box-content-sidebar-->
            <div class="box-content-sidebar">
                <h3><i class="fa-solid fa-list"></i> Selecione a categoria</h3>
                <form>
                    <select name="categoria">
                        <option value="eportes">Esportes</option>
                        <option value="economia">Economia</option>
                    </select>
                </form>
            </div><!--box-content-sidebar-->
            <div class="box-content-sidebar">
                <h3><i class="fa-solid fa-user-tie"></i> Sobre o autor</h3>
                <div class="autor-box-portal">
                    <div class="box-img-autor"></div>
                    <div class="texto-autor-portal text-center">
                        <h3>Lorem Ipsum</h3>
                        <p>Duis exercitation minim aliquip nisi et. Voluptate adipisicing nostrud aute ex sunt proident
                            elit ex occaecat non amet proident enim est.</p>
                    </div><!--texto-autor-portal-->
                </div><!--autor-box-portal-->
            </div><!--box-content-sidebar-->
        </div><!--sidebar-->
        <div class="conteudo-portal">
            <div class="header-conteudo-portal">
                <!--<h2>Visualilzando todas as notícias</h2>-->
                <h2>Visualizando notícias em <span>Esportes</span></h2>
            </div><!--header-conteudo-portal-->
            <?php for($i = 0; $i < 5; $i++){?>
            <div class="box-single-conteudo">
                <h2>22/08/2025 - Lorem ipsum dolor sit amet...</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, eaque. Sit do dolor ullamco quis sit
                    magna nisi. Aute enim ex Lorem incididunt cupidatat. Aliqua deserunt aliqua enim pariatur do culpa
                    mollit ex sint. Cupidatat in laborum velit enim aliqua cillum magna mollit proident eu velit
                    eiusmod.</p>
                <a href="<?php echo INCLUDE_PATH; ?>noticias/esportes/nome-do-post">Leia mais</a>
            </div><!--box-single-conteudo-->
            <?php }?>
            <div class="paginator">
                <a class="active-page" href="">1</a>
                <a href="">2</a>
                <a href="">3</a>
            </div><!--paginator-->
        </div><!--conteudo-portal-->
        <div class="clear"></div>
    </div><!--center-->
</section><!--container-portal-->
<?php } else{
    include('noticia-single.php'); } 
?>