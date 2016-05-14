$(function() {
    var handle_scroll = function() {
        $('body').scrollNav({
            showHeadline: false,
            showTopLink: false,
            speed: 700,
            insertTarget: '.nav-container',
            insertLocation: 'appendTo',
            fixedMargin: 0,
            scrollOffset: 60
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
});