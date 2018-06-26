
// function clickpress(){
// 	$(this).css("display","block");
// }

$(window).ready(function() { // better to use $(document).ready(function(){
    $('.menu').on('click touchstart', function() {
        $('.hoverpic').css( "display", "block" );
    });
});