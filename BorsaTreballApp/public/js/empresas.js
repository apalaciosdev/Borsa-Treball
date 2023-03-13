$('#editarDatos').click(function () {
    $(this).parent().find('button').each(function () {
        $(this).toggleClass('d-none');
    })
    var $inputs = $(this).closest('form').find(':input').filter('input:not([type=hidden])');
    $inputs.each(function () {
        $(this).attr('readonly', false);
        $(this).attr('placeholder', $(this).val());
        $(this).val('');
    })
    var form = $(this).closest('form')[0];
    var input = document.createElement('input');

})