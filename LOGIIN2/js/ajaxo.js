	$(document).ready(function() {
		// mision
			   $('#mision').click(function(){
			      $.ajax({
				    url: "mision.html",
				    success: function(a) {
			                $('#uno').html(a);
				    }
			       });
			   });

			   //vision
			   	 $('#vision').click(function(){
			      $.ajax({
				    url: "vision.html",
				    success: function(a) {
			                $('#uno').html(a);
				    }
			       });
			   });
			   	 // valores
			   	  //vision
			   	 $('#valores').click(function(){
			      $.ajax({
				    url: "valores.html",
				    success: function(a) {
			                $('#uno').html(a);
				    }
			       });
			   });
			   	  //obje
			   	 $('#objetivo').click(function(){
			      $.ajax({
				    url: "objetivo.html",
				    success: function(a) {
			                $('#uno').html(a);
				    }
			       });
			   });
			   	  //compro
			   	 $('#compromiso').click(function(){
			      $.ajax({
				    url: "compromiso.html",
				    success: function(a) {
			                $('#uno').html(a);
				    }
			       });
			   });
});
		/*ocultos*/
		$(document).on("ready",inicial)
		function inicial () {
			//llamamos al boton
				$("#log").on("click", bot1);
					}
					var escon=
							{
								opacity:0,
								display:"none",
								overflow:"hidden",
							};
					var ver=
							{
								opacity:1,
								display:"inline-block",
							};
							
			function bot1()
			{
				
				$("#tabs").css(escon);
				$("#login").css(ver);

			}

