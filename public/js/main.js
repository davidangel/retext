$(document).ready(function() {

    $('form input[type=text]').first().focus();

    setTimeout(function() { $('.flash').fadeOut(2000); } , 5000)

});