$(document).ready(function() {
    initHeaderItems();

    /**
     * Отображение активной вкладки
     */
    function initHeaderItems() {
        if (location.pathname === '/') {
            $('.nav-link[href="/"]').addClass('active');

            return;
        }

        $('.nav-link').each(function () {
            if ($(this).attr('href') === location.pathname) {
                $(this).addClass('active');
            } else {
                $(this).removeClass('active');
            }
        })
    }
})