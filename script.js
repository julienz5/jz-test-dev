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
				"type": {
					"required": true,
					"selection":"Quelle type de surface souhaitez-vous isoler ?"
				},
				"energie": {
					"required": true,
					"selection":"Quelle est votre énergie de chauffage ?"
				},
				"fname": {
					"required": true,	
				},
				"phone": {
					"required": true,
					"regex": /^((0|\+33)[1-9]( *[0-9]{2}){4})$/
					
				},
				"email": {
					"required": true,
					"email": true
				}
			}
		});
	}

	jQuery.extend(jQuery.validator.messages, {
		required: "Ce champs est requis.",
		email: "Veuillez renseigner un email valide.",
		number: "votre age"
	  });

	  jQuery.validator.addMethod(
		"regex",
		 function(value, element, regexp) {
			 if (regexp.constructor != RegExp)
				regexp = new RegExp(regexp);
			 else if (regexp.global)
				regexp.lastIndex = 0;
				return this.optional(element) || regexp.test(value);
		 },"Veuillez renseigner un téléphone valide."
	  );

	  jQuery.validator.addMethod("selection", function(value, element, arg){
		return arg !== value;
	   }, "Veuillez faire une sélection");

});

