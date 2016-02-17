/**
 * Created by davidmcgowan on 14/10/2015.
 */

(function($){

    $(document).ready(function() {

        //scroll to top
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 1000);
            return false;
        });

    });

})(jQuery);