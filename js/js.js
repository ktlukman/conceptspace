$(document).ready(function(){
    var gl1Height = $(".gl-1").height();
	//console.log(gl1Height);
	
	$(".ourworks").css({"min-height":gl1Height+"px"});
	
	var gl2Height = $(".news-image").height();
	
	$(".hello-form").css({"min-height":gl2Height+"px"});	
	
	$("#contact-form").submit(function(event) {
		event.preventDefault();
		
		
        
        if (this.checkValidity()) {
          // Serialize the form data
          var formData = $(this).serialize();
          
          // Send a POST request to the PHP script
          $.ajax({
            type: "POST",
            url: "./query.php", // Replace with your PHP script URL
            data: formData,
            success: function(response) {
              // Handle the response from the PHP script (e.g., display a success message)
              console.log("s"+response);
            }
          });
        }
      });
	

	
	
});




