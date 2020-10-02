//Variables

const btnLog = document.querySelector('.btn-login');
const form = document.querySelector('.form-init');
const spinner = document.querySelector('.spinner-grow');
const email = document.querySelector('.email-log');
const pass = document.querySelector('.pass-log');


//AddEventListener

eventlistener();

function eventlistener(){
    //Validation email
    email.addEventListener('input', formValidation)
    //Validation pass
    pass.addEventListener('input', formValidation)
    //Spinner
    form.addEventListener('submit', newForm);
}

//FUNCTION SEND FORM AND ENABLED SPINNER
function newForm(e){
    e.preventDefault();
    //SPINNER ENABLED
    spinner.style.display = 'block';
    spinner.style.marginTop = '50px'
    //DELETE BUTTON
    btnLog.style.display = 'none';
    //SEND FORM    
    setTimeout( () => {
        form.submit();
    }, 2000);     
}

//FUNCTION VALID FIELDS
function formValidation(){
    //EMAIL VALIDATION
    if(email.value.length > 6){
        if(email.value.includes("@montechelo.com")){
            //BORDER GREEN
            email.style.borderBottom = "1px solid #00B811";
        }else{
            //BORDER RED
            email.style.borderBottom = "1px solid #FF0000";
            //BUTTON DISABLED 
            btnLog.disabled = true;
        }
    }
    //PASSWORD VALIDATION
    if(pass.value.length >= 8){
        //BORDER GREEN 
        pass.style.borderBottom = "1px solid #00B811";
    }else{
        //BORDER RED 
        pass.style.borderBottom = "1px solid #FF0000";
        //BUTTON DISABLED 
        btnLog.disabled = true;
    } 
    //SPINNER FUN
    if(pass.value.length >= 8 && email.value.length > 6 && email.value.includes("@montechelo.com")){
        //BUTTON ENABLED
       btnLog.disabled = false;
    }  
}