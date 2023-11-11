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
	
      //$(".custom-dropdown, .dropdown-toggle").popover({ trigger: "hover" });
     

      $(".dropdown-toggle").mouseenter(function () { 
        $(this).addClass("show");
        $(this).next(".dropdown-menu").addClass("show");
      });
      $(".dropdown").mouseleave(function () { 
        //$(this).removeClass("show");
        $(this).children(".dropdown-menu").removeClass("show");
      }); 
      /* $(".dropdown-menu").mouseleave(function () {
        if($(this).hasClass("show")){
          $(this).removeClass("show");
        }
      }); */

      $(".grids").mouseenter(function () {
        $(this).children(".grid-head").slideUp();
        $(this).children(".grid-body").slideDown();
      });
      $(".grids").mouseleave(function () {
        $(this).children(".grid-head").slideDown();
        $(this).children(".grid-body").slideUp();
      });

      if ($(window).width() > 991) {
        $(".nav-item.dropdown").mouseenter(function () {
          var navWidth = $(this).width();
          $(this).children(".custom-dropdown").css({"width":navWidth+"px"});
        });
      }

	
});




