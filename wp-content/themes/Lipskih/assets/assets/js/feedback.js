jQuery(document).ready(function($){

    var form = $('.form-send-mail'),
        action = form.attr('action'),
        pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;

    form.find('.req-field').addClass('empty-field');

    function checkInput() {
        form.find('.req-field').each(function () {
            var el = $(this);
            if (el.hasClass('rf-mail')) {
                if (pattern.test(el.val())) {
                    el.removeClass('empty-field');
                } else {
                    el.addClass('empty-field');
                }
            } else if (el.val() != '') {
                el.removeClass('empty-field');
            } else {
                el.addClass('empty-field');
            }
        });
    }

    function lightEmpty() {
        form.find('.empty-field').addClass('rf-error');
        setTimeout(function () {
            form.find('.rf-error').removeClass('rf-error');
        }, 1000);
    }

    $(document).on('submit', '.form-send-mail', function (e) {
        var formData = {
            client_fio: $('#client_fio').prop('value'),
            client_mail: $('#client_mail').prop('value'),
            client_quest: $('#client_quest').prop('value')
        };

        $.ajax({
            type: 'POST',
            url: action,
            data: formData,
            beforeSend: function () {
                form.addClass('is-sending');
            },
            error: function (request, txtstatus, errorThrown) {
                console.log(request);
                console.log(txtstatus);
                console.log(errorThrown);
            },
            success: function () {
                form.removeClass('is-sending').addClass('is-sending-complete');
            }
        });

        e.preventDefault();

    });

    $(document).on('click', '.form-send-mail button[type="submit"]', function (e) {

        checkInput();

        var errorNum = form.find('.empty-field').length;

        if (errorNum > 0) {
            lightEmpty();
            e.preventDefault();
        }

    });

    $(document).on('click', '.form-is-more button', function () {

        form.find('input').val('');

        form.find('textarea').val('');

        form.removeClass('is-sending-complete');

    });

});
toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}
