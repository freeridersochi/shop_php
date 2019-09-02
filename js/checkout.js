$(document).ready(function(){
    //first  form
    $('.not_user').click(function(event){
        event.preventDefault();
        if( $('.client_name').val() && $('.client_phone').val() && $('.client_email').val() !== ''){
            $('.first_title').removeClass("active");
            $('.second_title').addClass("active");
            $('.first_form').css("display", "none");
            $('.second_form').css("display", "block");    
            }else{
                console.log("oops!");               
            }
        });
    $('.user').click(function(event){
        event.preventDefault();
            if( $('.user_email').val() && $('.user_password').val() !== ''){
            $('.first_title').removeClass("active");
            $('.second_title').addClass("active");
            $('.first_form').css("display", "none");
            $('.second_form').css("display", "block");    
            }else{
                console.log("User oops!");
            }
        });
    //second form
    $('.continue_two').click(function(event){
        event.preventDefault();
        $('.second_title').removeClass("active");
        $('.third_title').addClass("active");
        $('.second_form').css("display", "none");
        $('.confim_order').css("display", "block");
        });    
});