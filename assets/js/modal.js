var elements = $('.modal-overlay, .modal');

$('#myBtnF').click(function(){
    elements.addClass('active');
});

$('.close-modalF').click(function(){
    elements.removeClass('active');
});

$('#myBtnS').click(function(){
    elements.addClass('active');
});

$('.close-modalS').click(function(){
    elements.removeClass('active');
});