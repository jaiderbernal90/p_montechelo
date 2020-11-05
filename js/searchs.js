//Variables
const input = document.querySelector('input#anythingSearch');
const container = document.querySelector("#myDIV");
const filtro = document.querySelector('#filtro');

input.addEventListener('input', query_users);
filtro.addEventListener('change', filtrerUser);

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
    .then( user => { 
      container.innerHTML =  user;
      if(input.value.length < 1){
        filtrerUser();
      }
    })
    .catch(error => console.log(error));
}
function filtrerUser(){
      const data = `select=${filtro.value}`;
      fetch('../../controller/admin/create/filterUser.php',{
          method:'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
          },
          body: data
      })
      .then( res => res.text() )
      .then( users => {
            container.innerHTML =  users;
        })
      .catch(error => console.log(error))
}