$(document).ready(function(){ 

/* ***** First parth ****** */
    
//check control
    let errors=[];
    //check name 
    $('.client_name').on('input',function(){  
        function validateName(){    
            let regex = /[A-z0-9]/i;
            let name = document.getElementById('name');
            let error = document.getElementById('name_err');
            let value = name.value.trim();
            
            if( value!== '' ){
                
                console.log(regex.test(name.value));
                if (regex.test(value)){                        
                        error.innerHTML="<sup>*</sup>Only cirilic letters"; 
                        errors.push(name_err[error.textContent]);
                    }else{
                        error.innerHTML="";       
                        } 
                }else{
                    error.innerHTML="<sup>*</sup>Not empty";
            }
        };
        validateName();
    });
    
    //check phone
    $('.client_phone').on('input',function(){        
        function validatePhone(){
                
                let regex =/^((8|\+7)\s?)(\(?\d{3}\)?\s?)\d{3}\s?\d{2}\s?\d{2}$/;
                let phone = document.getElementById('phone');
                let error = document.getElementById('phone_err');
                let value = phone.value.trim();
                               
                if( value!== '' ){
                    if(!regex.test(value)){
                        error.innerHTML="<sup>*</sup>Like +7 (999) 000 00 00 "; 
                        errors.push(phone_err[error]);
                    }else{
                            error.innerHTML=""; 
                        }
                }else{  
                    error.innerHTML="<sup>*</sup>Not empty";
                }
            };
        validatePhone();
    });
    
    //email check function 
    function validateEmail(email,error){
            let regex = /.+@.+\..+/i;
            let value = email[0].value.trim();

            if( value!== '' ){
                if (!regex.test(value)){
                    error.innerHTML="<sup>*</sup>Your adrees must look 'example@gmail.com' ";
                    errors.push(email_err[error]);
                }else{
                    error.innerHTML="";       
                    }
            }else{
                error.innerHTML="<sup>*</sup>Not empty";
            }
        };
    //check client email
    $('.client_email').on('input',function(){
        let email = document.getElementsByClassName('client_email');
        let error = document.getElementById('email_err');
        validateEmail(email,error);
    });
    
    //check user_email
    $('.user_email').on('input',function(){
        let email = document.getElementsByClassName('user_email');
        let error = document.getElementById('user_email_err');
        validateEmail(email,error);
    });
    
    //check user_password
    $('#user_password').on('input',function(){
        function validatePsv(){
                let regex = /[А-яё]/i;
                let psv = document.getElementById('user_password');
                let error = document.getElementById('password_err');
                let value = psv.value.trim();

                if( value!== '' ){
                    if (regex.test(value)){
                        error.innerHTML="<sup>*</sup>Only english letters";
                        errors.push(password_err[error]);
                    }else{
                        error.innerHTML="";       
                        }
                }else{
                    error.innerHTML="<sup>*</sup>Not empty";
                }
            };
        validatePsv();
    });
    
/* ******** Second parth ****** */
    
    //check city    
    $('#city').on('input',function(){
        function validateCity(){
                let regex = /[A-z]/i;
                let city = document.getElementById('city');
                let error = document.getElementById('city_err');
                let value = city.value.trim();

                if( value!== '' ){
                    if (regex.test(value)){
                        error.innerHTML="<sup>*</sup>Only cirilic latters";
                        errors.push(city_err[error]);
                    }else{
                        error.innerHTML="";       
                        }
                }else{
                    error.innerHTML="<sup>*</sup>Not empty";
                }
            };
        validateCity();
    });
    
    //check street  
    $('#street').on('input',function(){
    function validateStreet(){
            let regex = /[A-z]/i;
            let street = document.getElementById('street');
            let error = document.getElementById('street_err');
            let value = street.value.trim();

            if( value!== '' ){
                if (regex.test(value)){
                    error.innerHTML="<sup>*</sup>Only cirilic latters";
                    errors.push(street_err[error]);
                }else{
                    error.innerHTML="";       
                    }
            }else{
                error.innerHTML="<sup>*</sup>Not empty";
            }
        };
    validateStreet();
    });
    
    //check home    
    $('.home').on('input',function(){
        function validateHome(){
                let regex = /[A-z]/i;
                let home = document.getElementById('home_num');
                let error = document.getElementById('home_err');
                let value = home.value.trim();

                if( value!== '' ){
                    if (regex.test(value)){
                        error.innerHTML="<sup>*</sup>Only cirilic";
                        errors.push(home_err[error]);
                    }else{
                        error.innerHTML="";       
                        }
                }else{
                    error.innerHTML="<sup>*</sup>Not empty";
                }
            };
        validateHome();
    });
    
    //check appartment 
    $('.appartment').on('input',function(){
    function validateAppartment(){
            let regex = /[A-zА-яё]/i;
            let appartment = document.getElementById('appartment_num');
            let error = document.getElementById('appartment_err');
            let value = appartment.value.trim();

            if( value!== '' ){
                if (regex.test(value)){
                    error.innerHTML="<sup>*</sup>Only number";
                    errors.push(appartment_err[error]);
                }else{
                    error.innerHTML="";       
                    }
            }else{
                error.innerHTML="<sup>*</sup>Not empty";
            }
        };
        validateAppartment();
    });

//end check control 

//form control

    //first parth
    $('.continue_one').on('click',function(){ 
    
        let error = false;
        
        /*
        if($('.client_name').val()==''){
            $('#name_err').html("<sup>*</sup>Обязательное поле");
            error = true;
        }
        if($('.client_phone').val()==''){ 
            $('#phone_err').html("<sup>*</sup>Обязательное поле");
            error = true;
        }
        if($('.client_email').val()==''){
            $('#email_err').html("<sup>*</sup>Обязательное поле");
            error = true;
        }
        */

        if($('#name_err').text().length > 0 || $('#phone_err').text().length > 0 || $('#email_err').text().length > 0){
            error = true;    
        };

        if(error){
            return false;
        };
    
    });//end first parth
    
    //second parth
    $('.continue_two').on('click',function(){ 
    
        let error = false;

        if($('.city').val()==''){
            $('#city_err').html("<sup>*</sup>Обязательное поле");
            error = true;
        }
        if($('.street').val()==''){ 
            $('#street_err').html("<sup>*</sup>Обязательное поле");
            error = true;
        }
        if($('.home_num').val()==''){
            $('#home_err').html("<sup>*</sup>Обязательное поле");
            error = true;
        } 
        if($('.appartment_num').val()==''){
            $('#appartment_err').html("<sup>*</sup>Обязательное поле");
            error = true;
        } 
        if($('#city_err').text().length > 0 || $('#street_err').text().length > 0 || $('#home_err').text().length > 0||$('#appartment_err').text().length > 0){
            error = true;    
        };

        if(error){
            return false;
        };
    });//end second parth    

//end form control

});//end ready 
