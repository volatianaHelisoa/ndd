jQuery( window ).load(function($) {
    jQuery('.pre').on('search', function(e) {
        if('' == this.value) {
            jQuery(this).trigger('keyup');
        }
    });

    jQuery('.editselectuser .loading').hide();
    jQuery('#actualitemobile_list').css('visibility','visible')
}); 
 
jQuery(document).ready(function() {
    $('.filter_select').change(function(){
        var language = $('#language').val();
        var country = $('#country').val();
        var category = $('#category').val();
        var base_url =  $('#url_filter').val();
        var url = base_url + '?language=' + language + '&country=' + country + '&category=' + category;
        window.location.href = url;
    })

    if($('.editselectuser').length > 0){
        $(document).keypress(function(e) {
            if(e.which == 13) {
                return false;
            }
        });
    }

    $('.ckh_all').click(function(e){
        e.preventDefault();
        jQuery('.checkuser').prop('checked',true);
    })

    $('.ckh_none').click(function(e){
        e.preventDefault();
        jQuery('.checkuser').prop('checked',false);
    })
	
	$('#editlicense').click(function(e){
		e.preventDefault();
		var _href = $(this).prop('href')
		$.ajaxSetup({data: {token: $('input[name=csrf_trigger_name]').val()}});
		$.ajax({
			type: "POST",
			url: base_url + "Users/ajax_edit_session",
			dataType: 'json',
			data: {
				organisation: $('input[name=organisation]').val(), 
				adresse: $('input[name=adresse]').val(), 
				city: $('input[name=city]').val(), 
				state: $('input[name=state]').val(), 
				ZIP: $('input[name=ZIP]').val(), 
				name: $('input[name=name]').val(),	
				surname: $('input[name=surname]').val(),
				email: $('input[name=email]').val(),
				phone_number: $('input[name=phone_number]').val(),
				csrf_trigger_name: $('input[name=csrf_trigger_name]').val(),
			},
			success: function(res) {
				if(res)
					window.location.href = _href;
			} 
		})
	});
	
	
	$('#editlogo').click(function(e){
		e.preventDefault();
		var _href = $(this).prop('href')
		$.ajaxSetup({data: {token: $('input[name=csrf_trigger_name]').val()}});
		$.ajax({
			type: "POST",
			url: base_url + "Users/ajax_edit_session",
			dataType: 'json',
			data: {
				organisation: $('input[name=organisation]').val(), 
				adresse: $('input[name=adresse]').val(), 
				city: $('input[name=city]').val(), 
				state: $('input[name=state]').val(), 
				ZIP: $('input[name=ZIP]').val(), 
				name: $('input[name=name]').val(),	
				surname: $('input[name=surname]').val(),
				email: $('input[name=email]').val(),
				phone_number: $('input[name=phone_number]').val(),
				csrf_trigger_name: $('input[name=csrf_trigger_name]').val(),
			},
			success: function(res) {
				if(res)
					window.location.href = _href;
			} 
		})
	});
	
	
	var getUrlParameter = function getUrlParameter(sParam) {
		var sPageURL = decodeURIComponent(window.location.search.substring(1)),
			sURLVariables = sPageURL.split('&'),
			sParameterName,
			i;

		for (i = 0; i < sURLVariables.length; i++) {
			sParameterName = sURLVariables[i].split('=');

			if (sParameterName[0] === sParam) {
				return sParameterName[1] === undefined ? true : sParameterName[1];
			}
		}
	};
	var all = getUrlParameter('all_checked');
	if(all == 1){
		$(".checkuser").attr('checked', 'checked');
	}

    if($('.trig_table').length > 0) {
        $('.trig_table').dataTable({
            destroy: true,
            "dom": '<"top"f>rt<"bottom"ipl><"clear">',
            "order": [ 1, 'desc' ] ,
            "language": {
                "search": '<i class="fa fa-search"></i>',
                "searchPlaceholder": "search",
            },
            "stripeClasses": [ 'odd-row', 'even-row' ]
        });
    }


    if($('.user_mobile').length > 0) {
        $('.user_mobile').dataTable({
            destroy: true,
            "dom": '<"top"f>rt<"bottom"ipl><"clear">',
            "language": {
                "search": '<i class="fa fa-search"></i>',
                "searchPlaceholder": "search"
            },
            "stripeClasses": [ 'odd-row', 'even-row' ]
        });
    }


    if($('.actualite_mobile').length > 0) {
        $('.actualite_mobile').dataTable({
            destroy: true,
            "dom": '<"top"f>rt<"bottom"ipl><"clear">',
            "language": {
                "search": '<i class="fa fa-search"></i>',
                "searchPlaceholder": "search"
            },
            "stripeClasses": [ 'odd-row', 'even-row' ],
            "processing": true,
            "serverSide": true,
            "ajax": base_url + "/actualites/ajax"  + filter_url,
        });
    }

	$('#recherche').keyup(function () {
		$('input[type=search]').val($(this).val());
		$('.dataTables_filter input[type=search]').keyup();

	});


		
	var tit = $('.title_m').val();
	 if(tit=="mr"){
	  $(".mr").attr('checked', 'checked');
	 }else if(tit=="ms"){
	  $(".ms").attr('checked', 'checked');
	 }else if(tit=="mss"){
	  $(".mss").attr('checked', 'checked');
	 };

	 var p = $('.code_phone_s').val();
 		$('#num_code').val(p);


 	 var p = $('.country_s').val();
 		$('#country_code').val(p);


 	 var p = $('.statut_s').val();
 		$('#statut_code').val(p);
		
		
		
	$("#inputupload").change(function () {
  var fileName = $("#inputupload")[0].files[0].name;
        $('.file-detect').text((fileName));
        return false;
    });
	
	
 	$(document).on("click",".log_dec", function(e) {
		e.preventDefault();
		currentForm = $(this).data('url');
		$("#dialog_log").dialog("open");
		return false;
	});

	jQuery("#dialog_log").dialog({
		autoOpen: false,
		modal: true,
		buttons : {
			"Yes" : function() {
				if(currentForm){
					window.location.href = currentForm;
				}
				$(this).dialog("close");
			},
			"Cancel" : function() {
				$(this).dialog("close");
			}
		}
	});
	
	$(document).on("click",".duser", function(e) {
		e.preventDefault();
		currentForm = $(this).data('url');
		$("#dialog").dialog("open");
		return false;
	});

	jQuery("#dialog").dialog({
		autoOpen: false,
		modal: true,
		buttons : {
			"Yes" : function() {
				if(currentForm){
					window.location.href = currentForm;
				}
				$(this).dialog("close");
			},
			"Cancel" : function() {
				$(this).dialog("close");
				location.reload();
			}
		}
	});
	
	$(document).on("click",".editilicence1", function(e) {
		e.preventDefault();
		$("#dialog1").dialog("open");
		return false;
	});

	jQuery("#dialog1").dialog({
		autoOpen: false,
		modal: true,
		buttons : {
			"Yes" : function() {
				$('.editlicence').submit()
				$(this).dialog("close");
			},
			"Cancel" : function() {
				$(this).dialog("close");
			}
		}
	});
	
	
	
	$(document).on("click",".duser1", function(e) {
		e.preventDefault();
		var $item_radio = $('#DataTables_Table_0').find('.checkuser');
		$item_radio.each(function(){
			if( $('.checkuser').is(':checked') ){
			$("#dialog2").dialog("open");
			return false;
			}
			$("#dialog3").dialog("open");
			return false;
		});
	});

    $(document).on("click",".duser2", function(e) {
        e.preventDefault();
        $('#exportselect').val(1);
        var $item_radio = $('#DataTables_Table_0').find('.checkuser');
        $item_radio.each(function(){
            if( $('.checkuser').is(':checked') ){
                $('.editselectuser').submit();
                return false;
            }
            $("#dialog3").dialog("open");
            return false;
        });
    });

	jQuery("#dialog2").dialog({
		autoOpen: false,
		modal: true,
		buttons : {
			"Yes" : function() {
				$('.editselectuser').submit();
				$(this).dialog("close");
			},
			"Cancel" : function() {
				$(this).dialog("close");
				location.reload();
			}
		}
	});
	
	jQuery("#dialog3").dialog({
		autoOpen: false,
		modal: true,
		buttons : {
			Ok : function() {
				$(this).dialog("close");
			},
			
		}
	});

			
});
