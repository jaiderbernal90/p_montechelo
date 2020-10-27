//Variables
const input = document.querySelector('#anythingSearch');
const container = document.querySelector("#myDIV");
const filtro = document.querySelector('#filtro');

document.addEventListener('input',query_users);
document.addEventListener('change', filtrerUser);

function query_users(){
    const data = `input=${input.value}`;
    fetch('../../controller/admin/create/searchUser.php',{
        method:'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: data
    })
    .then( res => res.text() )
    .then( users => { container.innerHTML =  users; })
    .catch(error => console.log(error))
}
function filtrerUser(){
    console.log(filtro.value);
    if(filtro.value != ''){
      const data = `select=${filtro.value}`;
      fetch('../../controller/admin/create/filterUser.php',{
          method:'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
          },
          body: data
      })
      .then( res => res.text() )
      .then( users => { container.innerHTML =  users; })
      .catch(error => console.log(error))
    }
}