//Variables

const btnLog = document.querySelector('.btn-login');
const form = document.querySelector('.form-init');
const spinner = document.querySelector('.spinner-grow');
const email = document.querySelector('.email-log');
const pass = document.querySelector('.pass-log');


//AddEventListener

eventlistener();

function eventlistener(){
    //Validar email
    email.addEventListener('input', formValidation)
    //Validar pass
    pass.addEventListener('input', formValidation)
    //Spinner
    form.addEventListener('submit', newForm);
}

function newForm(e){
        e.preventDefault();
        spinner.style.display = 'block';
        spinner.style.marginTop = '50px'
        btnLog.style.display = 'none';

        setTimeout( () => {
            
            location.href = '../controller/iniciar-sesion.php';

        }, 3000)       
}


function formValidation(){
    //EMAIL VALIDATION
    if(email.value.length > 6){
        if(email.value.includes("@montechelo.com")){
            email.style.borderBottom = "1px solid #00B811";
        }else{
            email.style.borderBottom = "1px solid #FF0000";
            btnLog.disabled = true;
        }
    }
    //PASSWORD VALIDATION
    if(pass.value.length >= 8){
        pass.style.borderBottom = "1px solid #00B811";
    }else{
        pass.style.borderBottom = "1px solid #FF0000";
        btnLog.disabled = true;
    } 
    //SPINNER FUN
    if(pass.value.length >= 8 && email.value.length > 6 && email.value.includes("@montechelo.com")){
       btnLog.disabled = false;
    }  
}