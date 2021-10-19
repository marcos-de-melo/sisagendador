$(document).ready(function(){

	var mensagem = $("#mensagem");
	var barra	= $("#barra");
	
	//var foto = $("#foto_funcionario");

	$("#btn_enviar_contato").on('click', function(event){
		
		event.preventDefault();
		$("#form_upload_contato").ajaxForm({
	
				url:'/paginas/contatos/uploads/upload_foto_contato.php',
			    uploadProgress: function(event, position, total, percentComplete) {
			        
			        barra.width(percentComplete+'%');
					mensagem.html(percentComplete+'%');
			    },
			    success: function(data) {
			    	
				mensagem.html(data);
				$("#foto_contato").attr("src", data+"?timestamp=" + new Date().getTime());	
					
			    },
			    error:function(data){
						console.log(data);
			    }
	
		}).submit()
	});

})

