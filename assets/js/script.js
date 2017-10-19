
$(document).ready(function(){
    $(".toggle_panel").click(function(){
    	var id = $(this).attr('data-id');
    	if($(".toggle_panel").find(".sp"+id).html() == '+'){
    		$(".toggle_panel").find(".sp"+id).html('-');
    	}else{
    		$(".toggle_panel").find(".sp"+id).html('+');
    	}
        $(".togle-"+id).toggle();
    });

    var $doc = $('html, body');
	$('.scrollSuave').click(function() {
	    $doc.animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 500);
	    return false;
	});

	$("#btnEnviar").click(function(){
		comprar();
	});

	$('#myModal').on('shown.bs.modal', function (event) {
		var button = $(event.relatedTarget);
	  	var src = button.data('src');
	  	src += "?wmode=opaque&showinfo=0&amp;autoplay=0&amp;controls=0&amp;modestbranding=1&amp;vq=&amp;rel=0";
	  	var modal = $(this);
	  	modal.find(".modal_video iframe").attr('src',  src );
	});
});

function comprar(){
	var nome = $("#nome").val();
	var email = $("#email").val();
	$.ajax({
		data: {nome: nome, email: email},
		type: 'POST',
		url:'/home/ajax_btn'
	});
}

