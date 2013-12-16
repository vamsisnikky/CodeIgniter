$(document).ready(function() {

    $(".various").fancybox({
        helpers: {
            overlay: {
                css: {
                    'background': 'rgba(58, 42, 45, 0.95)',
                }
            }
        },
        maxWidth: 1000,
        maxHeight: 800,
        fitToView: false,
        width: '80%',
        height: '70%',
        autoSize: false,
        closeClick: false,
        openEffect: 'fade',
        closeEffect: 'fade',
        scrolling: 'auto',
        preload: true,  
    });

});