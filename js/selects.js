//Variables

    const selectDeparment = document.querySelector('#deparment');
    const selectMunicipality = document.querySelector('#municipality');


//Event Listener 
    //Al cargar el documento mostrar Departamentos
    document.addEventListener('DOMContentLoaded', loadDepartment);
    //Al evidenciar un cambio se cargan los municipios correspondientes
    selectDeparment.addEventListener('change', loadMunicipality);

//Functions
function loadDepartment(){
    //Realizamos la conexión al archivo json
    fetch('../../colombia.json')
        .then( res => res.json() )
        .then( deparment => { 
            //Inicializamos la variable HTML con el primer option
            let html = ' <option value="" disabled selected>Elija una opción</option>';
            //Guardamos el id y el nombre del departamento en options
             deparment.forEach(deparments => {
                html += `<option value="${deparments.id}" >${deparments.departamento}</option>
                 `;
            })
            // Se insertan los options al select
            selectDeparment.innerHTML = html;
        })
        .catch(error => console.log(error))
}

function loadMunicipality(selectDeparments,selectMunicipalitys){
    //Realizamos la conexión al archivo json
    fetch('../../colombia.json')
        .then( res => res.json() )
        .then( deparment => { 
            let id = selectDeparment.value;
            selectMunicipality.innerHTML = '';
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
            selectMunicipality.innerHTML = html;
        })
        .catch(error => console.log(error))
}