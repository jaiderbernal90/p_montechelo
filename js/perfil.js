
// Variables
const btnUpdate = document.querySelector('.update');
const btnSave = document.querySelector('.save');

const inputEmail = document.querySelector('#email');
const inputCel = document.querySelector('#cel');
const inputGenero = document.querySelector('#genero');
const inputCity = document.querySelector('#city');
const inputDepartment = document.querySelector('#deparment');
const inputAddress = document.querySelector('#address');

const inputs = document.querySelectorAll('.inputs');
const formsInput = document.querySelectorAll('.form-control');
const mdForm = document.querySelectorAll('.md-form');
const form = document.querySelector('.form');
const spinner = document.querySelector('.spinner-grow');
const btnsGroup = document.querySelector('.group-btn');
let validate = null;

//Valores predeterminados
btnSave.style.display = 'none';

//Add Event Listener
btnUpdate.addEventListener('click', formDisabled);
btnSave.addEventListener('click', loadForm);

// Functions
    function formDisabled(e){
        e.preventDefault();
        //Se recorre la variable inputs, con todos los campos que se pueden modificar 
        inputs.forEach(input =>{
            //Se valida los inputs para hablitarlos o deshabilitarlos
            if(input.disabled === true){
                //Se quita la propiedad disabled, se agregra borde y btn modificar cambia a cancelar
                input.removeAttribute('disabled');
                input.style.borderBottom = '1px solid #ccc';
                btnUpdate.textContent = 'Cancelar';
                //Agregar Btn guardar
                btnSave.style.display = 'block';
                btnSave.setAttribute('disabled',true);
                btnUpdate.classList.add('ml-auto');
                btnUpdate.classList.remove('m-auto');
                input.addEventListener('blur', validationInput);
            }else if(input.disabled === false){
                //Se agrega la propiedad disabled, se quita el borde y btn cancelar cambia a Modificar
                console.log('sdfd');
                input.setAttribute('disabled',true);
                input.style.borderBottom = '0px';
                btnUpdate.textContent = 'Modificar';
                btnSave.style.display = 'none';
                btnUpdate.classList.add('m-auto');
                btnUpdate.classList.remove('ml-auto');
            }
        });       
    }

    //FUNCTION VALIDATION INPUTS
    function validationInput(e){
        //Validacion de los inputs 
        if(e.target.type === 'email'){
            let value = e.target.value;
            if(value.length > 6 && value.includes("@montechelo.com")){
                //BORDER GREEN
                e.target.style.borderBottom = '1px solid #57C203';
            }else{
                //BORDER RED
                e.target.style.borderBottom = '1px solid #FF0000'; 
            }
        }else if(e.target.type === 'text'){
            if(e.target.value.length > 5){
                //BORDER GREEN
                e.target.style.borderBottom = '1px solid #57C203';
            }else{
                //BORDER RED
                e.target.style.borderBottom = '1px solid #FF0000';
            }
        }else if(e.target.type === 'number'){
            if(e.target.value.length >= 10){
                //BORDER GREEN
                e.target.style.borderBottom = '1px solid #57C203';
            }else{
                //BORDER RED
                e.target.style.borderBottom = '1px solid #FF0000';
            }
        };
        validationForm(); 
    }
    function validationForm(){
        if(inputEmail.value.length > 0 && inputEmail.value.includes("@montechelo.com") && inputCel.value.length >= 10 && inputGenero.value.length > 6 && inputCity.value.length > 1 && inputDepartment.value.length > 0 && inputAddress.value.length > 4){
            btnSave.removeAttribute('disabled');
        }else{
            btnSave.setAttribute('disabled', true);
        }
    }

    //FUNCTION SEND FORM
    function loadForm(e){
        e.preventDefault();
        //SPINNER ENABLED
        spinner.style.display = 'block';
        //DELETE BUTTON
        btnsGroup.children.forEach(btn =>{
            btn.style.display = 'none';
        })
        //SEND FORM    
        setTimeout( () => {
            form.submit();
        }, 2000);  
    }