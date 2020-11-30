// Variables
const btnLike = document.querySelectorAll('.like');
const spanModalLike = document.querySelectorAll('.modal-span');
const contModal = document.querySelector('#like');
let url,data;

// Add EventListener

btnLike.forEach(btn => {
    btn.addEventListener('click', () =>{
        validationClass(btn)
    });
});
//LIKE MODAL
spanModalLike.forEach(span => {
    span.addEventListener('click', validationSpan);
});

// FUNCTIONS 
//-----------------------------------------------LIKES---------------------------------------------
function validationClass(btn){
    //VALIDATION IF TARGET IS ICON OR <i>
        if(btn.className.includes('is-loading')){
            url = '../../controller/admin/create/like.php';
            data = `id_publications=${btn.id}`;
            fetchs(url,data,btn.parentNode.childNodes[3]);
        }else{
            url = '../../controller/admin/delete/dislike.php';
            data = `id_publications=${btn.id}`;
            fetchs(url,data,btn.parentNode.childNodes[3]);
        }
}
//FUNCION PARA REALIZAR LAS PETICIONES A PHP
export function fetchs(url,data,btn){
    console.log(data);
    fetch(url,{
        method:'POST',
        headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: data
    })
    .then(res => res.text())
    .then(like => {
          reloadLike(data,btn);
      })
    .catch(error => console.log(error))
}
//FUNCION PARA QUE EL CONTADOR DE LIKES SE ACTUALICE CADA VEZ QUE SE RALICE UNA ACCIÓN
export function reloadLike(data,btn){
    fetch('../../controller/admin/create/countLike.php', {
        method:'POST',
        headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: data
    })
    .then(res => res.text())
    .then(numlikes => {
        btn.innerHTML = numlikes;
      })
    .catch(error => console.log(error))
}

// ------------------------------------------MODAL------------------------------------------------
//LIKE
function validationSpan(e){
    data = `id_publications=${e.target.parentNode.childNodes[1].id}`;
    fetch('../../controller/admin/create/viewLikes.php', {
        method:'POST',
        headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: data
    })
    .then(res => res.text())
    .then(likes => {
        contModal.innerHTML = likes;
      })
    .catch(error => console.log(error))
}



