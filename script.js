$(document).ready(function() {

    $('a[href^="#"]').click(function(){
        var the_id = $(this).attr("href");
        if (the_id === '#') {
            return;
        }
        $('html, body').animate({
            scrollTop:$(the_id).offset().top
        }, 'slow');
        return false;
    });

    	//Contact Form Validation
	if($('#contact-form').length){
		$('#contact-form').validate({
			rules: {
				pname: {
					required: true
				},
				busname: {
					required: true
				},
				topic: {
					required: true
				},
				phone: {
					required: false
				},

				descr: {
					required: true
				},

				email: {
					required: true,
					email: true
				}
			}
		});
	}

});

