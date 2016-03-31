jQuery(document).ready(function($) {
    $('#contact-form').on('submit', function(e){

         e.preventDefault();
      //  e.stopPropagation();
        var data = {
            'action': 'send_letter',
            //'dataType' : 'json',
            'nonce' : ajax_object.nonce,
            'name' : $('#contact_name').val(),
            'email' : $('#contact_email').val(),
            'comments': $('#commentsText').val()

        };

       $.post(ajax_object.ajax_url, data, function(response) {
            alert(response);
        });
    });



});
