$(document).ready(function(){
    //first  form
    $('.continue_first').click(function(event){
        event.preventDefault();
        $('.first_form h2').removeClass("active");
        $('.second_form h2').addClass("active");
        $('.first_form form').css("display", "none");
        $('.second_form form').css("display", "block");    
        });
    //second form
    $('.continue_two').click(function(event){
        event.preventDefault();
        $('.second_form h2').removeClass("active");
        $('.confim_order h2').addClass("active");
        $('.second_form form').css("display", "none");
        $('.form_body').css("display", "block");
        });
});