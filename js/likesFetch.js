// Variables
const btnLike = document.querySelectorAll('.like');
const spanModal = document.querySelectorAll('.modal-span');
const contModal = document.querySelector('.modal-content');
let url,data;

// Add EventListener

btnLike.forEach(btn => {
    btn.addEventListener('click', validationClass);
});

spanModal.forEach(span => {
    span.addEventListener('click', validationSpan);
});

// FUNCTIONS 
//-----------------------------------------------LIKES---------------------------------------------
function validationClass(e){
    //VALIDATION IF TARGET IS ICON OR <i>
    if(e.target.className.includes('fa')){
        if(e.target.parentNode.className.includes('is-loading')){
            url = '../../controller/admin/create/like.php';
            data = `id_publications=${e.target.parentNode.id}`;
            fetchs(url,data,e.target.parentNode.parentNode.childNodes[3]);
        }else{
            url = '../../controller/admin/create/dislike.php';
            data = `id_publications=${e.target.parentNode.id}`;
            fetchs(url,data,e.target.parentNode.parentNode.childNodes[3]);
        }
    }else{
        if(e.target.className.includes('is-loading')){
            url = '../../controller/admin/create/like.php';
            data = `id_publications=${e.target.id}`;
            fetchs(url,data,e.target.parentNode.childNodes[3]);
        }else{
            url = '../../controller/admin/create/dislike.php';
            data = `id_publications=${e.target.id}`;
            fetchs(url,data,e.target.parentNode.childNodes[3]);
        }
    }
}
//FUNCION PARA REALIZAR LAS PETICIONES A PHP
function fetchs(url,data,btn){
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
function reloadLike(data,btn){
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
        console.log(likes);
        contModal.innerHTML = likes;
      })
    .catch(error => console.log(error))
}





