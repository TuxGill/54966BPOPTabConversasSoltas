// Document Ready
$('document').ready(function(){

	// $('.vid-item a').fancybox();

	// $(".vid-item a").fancybox({
	// 	'transitionIn'	: 'none',
	// 	'transitionOut'	: 'none'
	// });

	$(".vid-item a").colorbox({
		iframe:true, 
		innerWidth:"80%", 
		innerHeight:"55%",
		opacity: "0.70",
		close: "&#xf00d"
	});

	//jPList Gallery Init
    $('#videoGallery').jplist({
        itemsBox: '.list'
        ,itemPath: '.vid-item'
        ,panelPath: '.jplist-panel'
    });


}); //Document Ready End 



/*TODO: 

	1- DETETAR QUANDO O FILTRO É FEITO PARA MUDAR TAMBÉM O TEXTO DE DESCRIÇÃO. ATUALMENTE NAO ESTÁ A MUDAR
	2- FAZER CSS DA GALERIA E PAGINAÇÃO
	3- FAZER PARTE MOBILE


*/

