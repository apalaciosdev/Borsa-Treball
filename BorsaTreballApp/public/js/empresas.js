// editar datos de la empresa
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
    var div = document.createElement('div');
    div.classList.add('col-2');
    div.classList.add('mb-3');
    var label = document.createElement('label');
    label.innerHTML = 'Contraseña';
    label.classList.add('form-label');
    var input = document.createElement('input');
    input.type = 'password';
    input.name = 'password';
    input.placeholder = 'Nueva contraseña';
    input.classList.add('form-control');

    div.appendChild(label);
    div.appendChild(input);
    form.insertBefore(div, form.querySelector('div.botones'));
})

// Editar datos de oferta
$('#editarDatosOferta').click(function () {
    $(this).parent().find('button').each(function () {
        $(this).toggleClass('d-none');
    })
    var $inputs = $(this).closest('form').find(':input:not([disabled]):not([type=hidden])');
    $inputs.each(function () {
        $(this).attr('readonly', false);
        $(this).attr('placeholder', $(this).val());
        $(this).val('');
    })
    $(this).closest('form').find(':input#estadoOferta').attr('disabled', false);
})