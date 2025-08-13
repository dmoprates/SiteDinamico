$( function(){
    $('nav.mobile').click(function(){
        var listaMenu = $('nav.mobile ul');
        //Abrir Menu através de fadeIn/fadeOut
        /*if(listaMenu.is(':hidden') == true)
            listaMenu.fadeIn();
        else
            listaMenu.fadeOut();*/
        listaMenu.slideToggle();
    })
   
})