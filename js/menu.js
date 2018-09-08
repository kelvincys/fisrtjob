$(window).ready(function() {
    $('#item1').hover(
        function() {
            $('#img1').fadeIn('slow');
        },function() {
            $('#img1').fadeOut('slow');
        }
    );

    $('#item2').hover(
        function() {
            $('#img2').fadeIn('slow');
        },function() {
            $('#img2').fadeOut('slow');
        }
    );

    $('#item3').hover(
        function() {
            $('#img3').fadeIn('slow');
        },function() {
            $('#img3').fadeOut('slow');
        }
    );
});