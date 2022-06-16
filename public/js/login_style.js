$(function () {
    $('input, select').on('focus', function () {
        $(this).parent().find('.input-group-text').css('border-color', '#80bdff');
    });
    $('input, select').on('blur', function () {
        $(this).parent().find('.input-group-text').css('border-color', '#ced4da');
    });
});

$('.btr').click(function () {
    $('.btl').removeClass('active')
})

$('.btl').click(function () {
    $('.btr').removeClass('active')
})




