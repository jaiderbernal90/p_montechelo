import { viewComment } from './commentsFetch.js';
import { fetchs, reloadLike } from './likesFetch.js';
//Variables
const input = document.querySelector('input#anythingSearch');
const container = document.querySelector("#demo");
const filtro = document.querySelector('#filtro');
const btnDelete = document.querySelectorAll('.btn-delete');

input.addEventListener('input', query_publications);
filtro.addEventListener('change', filtrerPublications);

btnDelete.forEach(btn => {
  btn.addEventListener('click', () =>{
    deletePublication(btn);
  })
})

function query_publications(){
    let url;
    if(input.name === 'noticias'){
      url = '../../controller/admin/create/searchPublications.php';
    }else if(input.name === 'anuncios'){
      url = '../../controller/admin/create/searchAnuncios.php';
    }
    const data = `input=${input.value}`;
    fetch(url,{
        method:'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: data
    })
    .then( res => res.text())
    .then( user => { 
      container.innerHTML =  user;
      if(input.value.length < 1){
        filtrerPublications();
      }
      const spanModalCommen = document.querySelectorAll('.modal-span-com');
    //-------------------------------------------------
    //EVENT LISTENER COMMENTS
    spanModalCommen.forEach(span => {
        span.addEventListener('click', () => {
          //CALL FUN VIEW COMMENTS SPICIFICATION
          viewComment(span.id);
        })
    })
    //-------------------------------------------------
    //---ANIMATION LIKE
    var $buttons = $(".button");

    // Click button
    $buttons.on('click', function () {
    var $button = $(this);

    // Button Off
    if ($button.hasClass('is-active')) {
        $button
        .removeClass('is-active');
        return;
    }

    // Button On (with a loader)
    $button.addClass('is-loading');  
        setTimeout(function () {
            $button
            .removeClass('is-loading')
            .addClass('is-active');
            }, 500);
        });
    //----./ANIMATION LIKE 
    //EVENT LISTENER LIKES
    const btnLike = document.querySelectorAll('.like');
    let url,dataLike;


    btnLike.forEach(btn => {
        btn.addEventListener('click', () =>{
            validationClass(btn)
        });
    });
    function validationClass(btn){
      //VALIDATION IF TARGET IS ICON OR <i>
          if(btn.className.includes('is-loading')){
              url = '../../controller/admin/create/like.php';
              dataLike = `id_publications=${btn.id}`;
              fetchs(url,dataLike,btn.parentNode.childNodes[3]);
          }else{
              url = '../../controller/admin/create/dislike.php';
              dataLike = `id_publications=${btn.id}`;
              fetchs(url,dataLike,btn.parentNode.childNodes[3]);
          }
  }

    })
    .catch(error => console.log(error));
}
export function filtrerPublications(){
      let url;
      if(filtro.name === 'anuncios'){
        url = '../../controller/admin/create/filterAnuncie.php';
      }else if(filtro.name === 'noticias'){
        url = '../../controller/admin/create/filterPublication.php';
      }
      const data = `select=${filtro.value}`;
      fetch(url,{
          method:'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
          },
          body: data
      })
      .then( res => res.text() )
      .then( users => {
            container.innerHTML =  users;
            const spanModalCommen = document.querySelectorAll('.modal-span-com');

            //EVENT LISTENER COMMENTS
            spanModalCommen.forEach(span => {
                span.addEventListener('click', () => {
                //CALL FUN VIEW COMMENTS SPICIFICATION
                viewComment(span.id);
            })
          })
          //./COMMENTS
              //-------------------------------------------------
          //---ANIMATION LIKE
          var $buttons = $(".button");

          // Click button
          $buttons.on('click', function () {
          var $button = $(this);

          // Button Off
          if ($button.hasClass('is-active')) {
              $button
              .removeClass('is-active');
              return;
          }

          // Button On (with a loader)
          $button.addClass('is-loading');  
              setTimeout(function () {
                  $button
                  .removeClass('is-loading')
                  .addClass('is-active');
                  }, 500);
              });
          //----./ANIMATION LIKE 
          //EVENT LISTENER LIKES
          const btnLike = document.querySelectorAll('.like');
          let url,dataLike;


          btnLike.forEach(btn => {
              btn.addEventListener('click', () =>{
                  validationClass(btn)
              });
          });
          function validationClass(btn){
            //VALIDATION IF TARGET IS ICON OR <i>
                if(btn.className.includes('is-loading')){
                    url = '../../controller/admin/create/like.php';
                    dataLike = `id_publications=${btn.id}`;
                    fetchs(url,dataLike,btn.parentNode.childNodes[3]);
                }else{
                    url = '../../controller/admin/create/dislike.php';
                    dataLike = `id_publications=${btn.id}`;
                    fetchs(url,dataLike,btn.parentNode.childNodes[3]);
                }
              }
        })
      .catch(error => console.log(error))
}

function deletePublication(esto){
  Swal.fire({
      title: 'Eliminar publicación',
      text: "¿Seguro que quieres borrar esta publicación de manera permanente?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Eliminar'
    }).then((result) => {
      if (result.isConfirmed) {
          Swal.fire(
              'Eliminado!',
              'Se ha borrado la publicación exitosamente',
              'success'
            )
          deletePublicationFetch(esto.id);
          setTimeout( () =>{
            filtrerPublications();
          },1000);
      }
    })
}
function deletePublicationFetch(id){
  const data = `id=${id}`;
  fetch('../../controller/admin/delete/deletePublication.php',{
      method:'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: data
  })
  .then( res => res.text() )
  .then( users => {
      // filtrerPublications();
  })
  .catch(error => console.log(error))
}