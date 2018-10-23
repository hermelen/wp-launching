$(document).ready(function(){
    $('.modal-body.message').hide();
    $('#news_form').submit(function(event){
        event.preventDefault();
        var email = $('#zero_newsletter_email').val();
        $.ajax({
            url : url,
            method : 'POST',
            data : { 'zero_newsletter_email' : email},
        }).done( emailSent() );
    })

    function emailSent(){
      $('.modal-body.form').hide();
      $('.modal-footer').hide();
      $('.modal-body.message').show();
      // $('#news_form')[0].reset();
      // $('.modal-body.form').delay(1000).show();
      // $('.modal-footer').delay(1000).show();
      // $('.modal-body.message').delay(1000).hide();
    }

    function resetForm(){
    }
});
