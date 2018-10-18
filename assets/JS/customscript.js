$(document).ready(function() {
   
    // // Activate an inline edit on click of a table cell
    // $('#ndd-list').on( 'click', 'tbody td:not(:first-child)', function (e) {
    //     editor.inline( this );
    // } );
    
   

    var password = $("#the-user-password-detail").text().replace(/./g, '*');
  
    $("#the-user-password-detail").text(password);

    $(".bloc-user").click(function(){
        $(this).toggleClass("show");
    });
    $(".main-wrapper,.nav-panel").click(function() {
        $(".bloc-user").removeClass("show");
    });
   
    $(".content-chips span").click(function(){
        var hideChip = $(this).parent(".content-chips li");
        hideChip.hide();
    });
    
} );

