$(document).ready(function() {
    $('.modal-body.message').hide();
    $('#news_form').submit(function(event) {
        event.preventDefault();
        var email = $('#zero_newsletter_email').val();
        $.ajax({
            url : url,
            method : 'POST',
            data : {
              'zero_newsletter_email' : email,
              'g-recaptcha-response': grecaptcha.getResponse()
            },
        }).done( function(){
          console.log(grecaptcha.getResponse());
          emailSent();
          setTimeout(function(){
            $('#news_form')[0].reset();
            $('.modal-body.form').show();
            $('.modal-footer').show();
            $('.modal-body.message').hide();
            $('#exampleModal').modal('hide');
            grecaptcha.reset();
          }, 2000);
        });
    })

    function emailSent(){
      $('.modal-body.form').hide();
      $('.modal-footer').hide();
      $('.modal-body.message').show();
    }
});
