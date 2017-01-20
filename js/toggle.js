jQuery(document).ready(function ($){
    $('.lesson h2').bind('click',function(e){
        e.preventDefault();
        var target = $(e.target);

        if ( target.attr('class') === 'icon-menu3' ) {
            target.attr('class', 'icon-menu4');
        } else {
            target.attr('class', 'icon-menu3');
        }

        target.next('.lesson-content').slideToggle("slow");
        return false;
    });
});