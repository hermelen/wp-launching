$(document).ready(function() {
    $('.modal-body.message').hide();
    $('#news_form').submit(function(event) {
        event.preventDefault();
        var email = $('#zero_newsletter_email').val();
        $.ajax({
            url: url,
            method: 'POST',
            data: {
                'zero_newsletter_email': email
            },
        }).done(function() {
            emailSent();
            setTimeout(function() {
                $('#news_form')[0].reset();
                $('#exampleModal').modal('hide');
                $('.modal-body.form').show();
                $('.modal-footer').show();
                $('.modal-body.message').hide();
            }, 1000);
        });
    })

    function emailSent() {
        $('.modal-body.form').hide();
        $('.modal-footer').hide();
        $('.modal-body.message').show();
    }
});
