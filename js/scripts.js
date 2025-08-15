$( function(){
    $('nav.mobile').click(function(){
        var listaMenu = $('nav.mobile ul');
        //Abrir Menu através de fadeIn/fadeOut
        /*if(listaMenu.is(':hidden') == true)
            listaMenu.fadeIn();
        else
            listaMenu.fadeOut();*/

        if(listaMenu.is(':hidden') == true){
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-bars');
            icone.addClass('fa-xmark')
            listaMenu.slideToggle();
        }else{
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-xmark');
            icone.addClass('fa-bars')
            listaMenu.slideToggle();
        }
    });
    if($('target').length > 0){
        var elemento = '#'+$('target').attr('target');
        var divScroll = $(elemento).offset().top;
        $('html, body').animate({'scrollTop': divScroll}, 2000);
    }

    carregarDinâmico();
    function carregarDinamico(){
        $('[realtime').click(function(){
            var pagina = $(this).att('realtime');
            $('container-principal').load(INCLUDE_PATH+'/pages/'+pagina+'.php');
            return false
        })
    }
})