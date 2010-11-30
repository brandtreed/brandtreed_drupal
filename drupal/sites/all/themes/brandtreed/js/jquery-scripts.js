
//--------------------------------------------
// Smooth Scrolling
//--------------------------------------------

$(function(){
    $('a[href*=#]').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
        && location.hostname == this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
            if ($target.length) {
                var targetOffset = $target.offset().top;
                $('html,body').animate({scrollTop: targetOffset}, 1000);
                return false;
            }
        }
    });
});


//--------------------------------------------
// jQuery Column Equalizer

//
//function equalHeight(group) {
//	tallest = 0;
//	group.each(function() {
//		thisHeight = $(this).height();
//		if(thisHeight > tallest) {
//			tallest = thisHeight;
//		}
//	});
//	group.height(tallest);
//}
//$(document).ready(function() {
//	equalHeight($(".match"));
//});



//--------------------------------------------
//Slider Right Channel Menu
//--------------------------------------------
$(document).ready(function() {

    var $sidebar   = $("#block-block-2"),
        $window    = $(window),
        offset     = $sidebar.offset(),
        topPadding = 10;

    $window.scroll(function() {
        if ($window.scrollTop() > offset.top) {
            $sidebar.stop().animate({
                marginTop: $window.scrollTop() - offset.top + topPadding
            });
        } else {
            $sidebar.stop().animate({
                marginTop: 10
            });
        }
    });

});


