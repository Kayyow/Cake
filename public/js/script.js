$(function() {
    var handle_scroll = function() {
        $('body').scrollNav({
            showHeadline: false,
            showTopLink: false,
            speed: 700,
            insertTarget: '.nav-container',
            insertLocation: 'appendTo',
            fixedMargin: 0,
            scrollOffset: 90
        })

        $('#logo').click(function() {
            $(document).scrollTo('body', 700, 60, true)
        });
    }
    handle_scroll();
    
    var toggle_menu = function() {
        $(".menu").click(function(e) {
            e.stopPropagation();
            $('.nav-container').toggleClass('responsive');
        });
    }
    toggle_menu();

    var submit_contact_form = function(event) {
        var inputName = $('input[name=name]'),
            inputEmail = $('input[name=email]'),
            inputSubject = $('input[name=subject]'),
            inputMessage = $('textarea[name=message]');

        var formDatas = {
            'name' : inputName.val(),
            'email' : inputEmail.val(),
            'subject' : inputSubject.val(),
            'message' : inputMessage.val()
        };

        $('span.error_field').html('');

        $.ajax({
            type: 'POST',
            url: '?page=contact-email',
            data: formDatas,
            dataType: 'json',
            encode: true
        }).done(function(data) {
            if (data.errors) {
                var errors = data.errors;
                for (var key in errors) {
                    if (errors.hasOwnProperty(key)) {
                        $('span.error_field.'+key).html(errors[key]);
                    }
                }
            } else if (data.success) {
                alert(data.message);
            }
        }).fail(function(data) {
            alert("Un problème est survenu.");
        });

        event.preventDefault();
    }
    $('form#contact').submit(function(e) { submit_contact_form(e) });
});