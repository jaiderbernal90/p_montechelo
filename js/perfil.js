// Variables
const btnUpdate = document.querySelector('.update');
const btnSave = document.querySelector('.save');
let valoresEncri;

let inputEmail = document.querySelector('#email');
let inputCel = document.querySelector('#cel');
let inputGenero = document.querySelector('#genero');
let inputCity = document.querySelector('#municipality');
let inputDepartment = document.querySelector('#deparment');
const inputAddress = document.querySelector('#address');
const inputCharge= document.querySelector('#charge');

let inputs = document.querySelectorAll('.inputs');
const formsInput = document.querySelectorAll('.form-control');
const mdForm = document.querySelector('.container-fluid-form');
const form = document.querySelector('.form');
const spinner = document.querySelector('.spinner-grow');
const btnsGroup = document.querySelector('.group-btn');

//Valores predeterminados
btnSave.style.display = 'none';

//Add Event Listener
document.addEventListener('DOMContentLoaded', initValesLocal);
btnUpdate.addEventListener('click', formDisabled);
btnSave.addEventListener('click', loadForm);

// Functions
    function formDisabled(e){
        e.preventDefault();
        //Se recorre la variable inputs, con todos los campos que se pueden modificar 
        inputs.forEach(input =>{
            //Se valida los inputs para hablitarlos o deshabilitarlos
            if(input.disabled){
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
                cancelLocal();
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
            if(e.target.value.length > 2){
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
        if(inputEmail.value.length > 0 && inputEmail.value.includes("@montechelo.com") && inputCel.value.length >= 10 && inputGenero.value.length > 0 && inputAddress.value.length > 4){
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
    //----------------------------------------------------------------------

    function initValesLocal(){
        añadirValorLocalStorage(inputEmail,inputEmail.id);
        añadirValorLocalStorage(inputCel,inputCel.id);
        añadirValorLocalStorage(inputGenero,inputGenero.id);
        añadirValorLocalStorage(inputCity,inputCity.id);
        añadirValorLocalStorage(inputDepartment,inputDepartment.id);
        añadirValorLocalStorage(inputAddress,inputAddress.id);
        añadirValorLocalStorage(inputCharge,inputCharge.id);
        obtenerCamposLocalStorage(inputCharge.id);
    }

    //Funcion 
    function cancelLocal(){
        inputEmail.value = obtenerCamposLocalStorage(inputEmail.id);
        inputCel.value = obtenerCamposLocalStorage(inputCel.id);
        inputCharge.value = obtenerCamposLocalStorage(inputCharge.id);
        inputAddress.value = obtenerCamposLocalStorage(inputAddress.id);

        if(obtenerCamposLocalStorage(inputGenero.id) === '1'){
            inputGenero.innerHTML = `<option selected="" value="1">Masculino</option>
            <option value="2">Femenino</option>
            <option value="3">Otro</option>`;
        }else if (obtenerCamposLocalStorage(inputGenero.id) === '2'){
            inputGenero.innerHTML = `<option value="1">Masculino</option>
            <option value="2"  selected>Femenino</option>
            <option value="3">Otro</option>`;
        }
    }

    function añadirValorLocalStorage(valor,key) {
        let valores;
        valores = obtenerCamposLocalStorage(valores);
        
        //Encriptamos el valor
        valoresEncri = valor.value;
        //Añadir los campos
        valores.push(valoresEncri);
        //Encriptamos la llave
        //keyEncrip=encriptar1(key);
        //Convertir de string a arreglo con localStorage
        localStorage.setItem(key, JSON.stringify(valoresEncri));
    }

    
    //Comprobar que haya elementos en localStorage, retorna un arreglo con o sin campos
    function obtenerCamposLocalStorage(name){
        //Revisamos los valores del localStorage
        if(localStorage.getItem(name) === null){
            name=[];
        }else{
            name = JSON.parse(localStorage.getItem(name));
        }
        return name;
    }