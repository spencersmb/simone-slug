/*
 *  Toggle Header search on and off
 */

jQuery(document).ready(function($){
    $('.search-toggle').click(function(event){
       $("#search-container").slideToggle('slow', function(){
           $('.search-toggle').toggleClass('active');
       });
    });
});