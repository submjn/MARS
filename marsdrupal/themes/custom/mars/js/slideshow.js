/**
 * Created by smaharjan on 1/26/2017.
 */
(function($, Drupal){
    Drupal.behaviors.slideShow = {
        attach: function(context, settings){
            $(document).ready(function(){
                $(document).ready(function(){
                    $('.flexslider').flexslider({
                        animation: "slide",
                        directionNav: true,
                        slideshow: false,
                    });
                });
            });
        }
    }

})(jQuery, Drupal);

// Drupal.behaviors.myBehavior = {
//     attach: function (context, settings) {
//         // Using once() to apply the myCustomBehaviour effect when you want to do just run one function.
//         $(context).find('input.myCustomBehavior').once('myCustomBehavior').addClass('processed');
//
//         // Using once() with more complexity.
//         $(context).find('input.myCustom').once('mySecondBehavior').each(function () {
//             if ($(this).visible()) {
//                 $(this).css('background', 'green');
//             }
//             else {
//                 $(this).css('background', 'yellow').show();
//             }
//         });
//     }
// };