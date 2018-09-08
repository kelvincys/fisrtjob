
// function clickpress(){
// 	$(this).css("display","block");
// }

$(window).ready(function() { // better to use $(document).ready(function(){
    $('.menu').on('click touchstart', function() {
        $('.hoverpic').css( "display", "block" );
    });
});


$('#img1').hover(
    function() {
        $('#btn').fadeIn('slow');
    },function() {
        $('#btn').fadeOut('slow');
    }
);

$('#img2').hover(
    function() {
        $('#btn').fadeIn('slow');
    },function() {
        $('#btn').fadeOut('slow');
    }
);

$('#img3').hover(
    function() {
        $('#btn').fadeIn('slow');
    },function() {
        $('#btn').fadeOut('slow');
    }
);