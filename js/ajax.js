$(document).ready(function(){
    $('#news_form').submit(function(event){
        event.preventDefault();
        var email = $('#zero_newsletter_email').val();

        $.ajax({
            url : 'http://wp-launching/',
            method : 'POST',
            data : { 'zero_newsletter_email' : email},
        }).done(function(){
            console.log('yep');

        });
    })

});
