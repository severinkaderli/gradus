$('.group__average').click(function() {
    console.log('clicked');
    $(this).parent().siblings('.group__wrapper').slideToggle();
});