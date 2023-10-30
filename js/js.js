$(document).ready(function(){
    var gl1Height = $(".gl-1").height();
	//console.log(gl1Height);
	$(".ourworks").css({"min-height":gl1Height+"px"});
	
	var gl2Height = $(".news-image").height();
	
	$(".hello-form").css({"min-height":gl2Height+"px"});
	
	    $(".hello-form").submit(function(e) {
			//e.preventDefault();
        // Retrieve form data
        var name = $("input[name='name']").val();
        var lastName = $("input[name='lastName']").val();
        var email = $("input[name='email']").val();
        var phoneNumber = $("input[name='phoneNumber']").val();
        var message = $("textarea[name='message']").val();

        // Send data to the PHP backend using AJAX
        $.ajax({
            type: "POST",
            url: "./query.php", // The URL of your PHP script
            data: {
                name: name,
                lastName: lastName,
                email: email,
                phoneNumber: phoneNumber,
                message: message
            },
            success: function(response) {
                // Handle the response from the server, e.g., display a success message
                alert("Form submitted successfully. Server response:\n" + response);
            }
        });
    });

});




