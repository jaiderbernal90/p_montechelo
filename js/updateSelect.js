//Variables
const selectDeparments = document.querySelector('#deparment');
const selectMunicipalitys = document.querySelector('#municipality');


//Event Listener 
//Al cargar el documento mostrar Departamentos
document.addEventListener('DOMContentLoaded', department);
//Al cargar el documento mostrar los municipios correspondientes
document.addEventListener('DOMContentLoaded', reloadMunicipality);
//Al evidenciar un cambio se cargan los municipios correspondientes
selectDeparments.addEventListener('change', loadMunicipality);

//Functions
function department(){
//Realizamos la conexión al archivo json
fetch('../../colombia.json')
    .then( res => res.json() )
    .then( deparment => { 
        //Inicializamos la variable HTML con el primer option
        let html = ' <option value="" disabled>Elija una opción</option>';
        //Guardamos el id y el nombre del departamento en options
         deparment.forEach(deparments => {
             //Validacion del departamento que trajo la consulta
             if(String(selectDeparments.value) === String(deparments.id)){
                html += `<option value="${deparments.id}" selected>${deparments.departamento}</option>
                `;
             }else{
                html += `<option value="${deparments.id}" >${deparments.departamento}</option>
                `;
             }
        })
        // Se insertan los options al select
        selectDeparments.innerHTML = html;
    })
    .catch(error => console.log(error))
}

function reloadMunicipality(){
//Realizamos la conexión al archivo json
fetch('../../colombia.json')
    .then( res => res.json() )
    .then( department => { 
        //Variables
        let id = selectDeparments.value;
        let idCity = selectMunicipalitys.value;
        selectMunicipalitys.innerHTML = '';
        //Inicializamos la variable HTML con el primer option
        let html = '<option value="" disabled>Elija una opción</option>';
        //Guardamos el id y el nombre del departamento en options
        department.forEach((departments) => {
             //Valida el departamento
            if(String(departments.id) === id){
                //Realiza consulta de los municipios
                departments.ciudades.forEach(ciudad => {
                    //Validación de la ciudad que trajo la consulta
                    if(String(idCity) === String(ciudad.id_municipality)){
                        html += `<option value="${ciudad.id_municipality}" selected>${ciudad.name_municipality}</option>`;
                    }else{
                        html += `<option value="${ciudad.id_municipality}" >${ciudad.name_municipality}</option>`;
                    }
                });
            }
        })
        //Se insertan los options al select
        selectMunicipalitys.innerHTML = html;
    })
    .catch(error => console.log(error))
}

function loadMunicipality(){
    //Realizamos la conexión al archivo json
    fetch('../../colombia.json')
        .then( res => res.json() )
        .then( deparment => { 
            let id = selectDeparments.value;
            selectMunicipalitys.innerHTML = '';
            //Inicializamos la variable HTML con el primer option
            let html = '<option value="" disabled selected>Elija una opción</option>';
            //Guardamos el id y el nombre del departamento en options
             deparment.forEach((deparments) => {
                 //Valida el departamento
                if(String(deparments.id) === id){
                    //Realiza consulta de los municipios
                    deparments.ciudades.forEach(ciudad => {
                        html += `<option value="${ciudad.id_municipality}" >${ciudad.name_municipality}</option>`;
                    });
                }
            })
            //Se insertan los options al select
            selectMunicipalitys.innerHTML = html;
        })
        .catch(error => console.log(error))
}