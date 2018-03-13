var elements = $('.modal-overlay, .modal');

$('#myBtn').click(function(){
    elements.addClass('active');
});

$('.close-modal').click(function(){
    elements.removeClass('active');
});