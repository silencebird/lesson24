jQuery(document).ready(function($) {
    $('.contact').on('submit', function(){
       //console.log('success');
       // e.preventDefault();
       // e.stopPropagation();
        var data = {
            'action': 'my_action',
            //'dataType' : 'jsonp',
            'nonce' : ajax_object.nonce,
            'contact_name' : $('#contact_name').val(),
            'contact_email' : $('#contact_email').val(),
            'contact_comments': $('#commentsText').val()

        };

        // We can also pass the url value separately from ajaxurl for front end AJAX implementations
        $.post(ajax_object.ajax_url, data, function(response) {
            alert(response);
            $('#contact_name').val('');
            $('#contact_email').val('');
            $('#commentsText').val('');
        });
    });



});
