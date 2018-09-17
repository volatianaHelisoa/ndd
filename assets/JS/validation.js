jQuery(document).ready(function() {
	jQuery('#licence').change(function(){
		if(jQuery('#licence').is(":checked")){
			jQuery("#licence_notif").val("oui");
		} else {
			jQuery("#licence_notif").val("");
		}
	});


	jQuery('#checksession').change(function(){
		if(jQuery('#checksession').is(":checked")){
			jQuery("#check_session").val("oui");
		} else {
			jQuery("#check_session").val("non");
		}
	})
});