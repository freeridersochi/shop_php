$(document).ready(function(){
    //first  form

    $('.continue_first').click(function(event){
        if( $('.client_name').val()||$('.client_phone').val()||$('.client_phone').val() !== ''
            && $('.client_phone').val() !== ''){
            $('.first_title').removeClass("active");
            $('.second_title').addClass("active");
            $('.first_form').css("display", "none");
            $('.second_form').css("display", "block");    
            }else{
                console.log("oops!");
            }

        });
    //second form
    $('.continue_two').click(function(event){
        $('.second_title').removeClass("active");
        $('.third_title').addClass("active");
        $('.second_form').css("display", "none");
        $('.confim_order').css("display", "block");
        });    
});