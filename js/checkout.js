$(document).ready(function(){
    //first  form
    $('.continue_one').click(function(event){
        event.preventDefault();
        if($('.client_phone').val() != ''){
        $('.first_form h2').removeClass("active");
        $('.second_form h2').addClass("active");
        $('.first_form form').css("display", "none");
        $('.second_form form').css("display", "block");    
        }else{
            $('.client_phone').css({"border":"1px solid red",
                                    "color":"green",
                                    "font-size": "13px"});
            $('.client_phone').val("Напишите телефон.");
            }
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