import { viewComment } from './commentsFetch.js';
import { fetchs, reloadLike } from './likesFetch.js';


//Variables
const input = document.querySelector('input#anythingSearch');
const container = document.querySelector("#demo");
const filtro = document.querySelector('#filtro');

input.addEventListener('input', query_publications);
filtro.addEventListener('change', filtrerPublications);

function query_publications(){
    const data = `input=${input.value}`;
    fetch('../../controller/admin/create/searchPublications.php',{
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
        filtrerPublications();
      }
      const spanModalCommen = document.querySelectorAll('.modal-span-com');
    //-------------------------------------------------
    //EVENT LISTENER COMMENTS
    spanModalCommen.forEach(span => {
        span.addEventListener('click', () => {
          console.log('click');
          // console.log('ME DISTE CLICK');
          // console.log(span.id);
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
      console.log(btn.id);
      //VALIDATION IF TARGET IS ICON OR <i>
          if(btn.className.includes('is-loading')){
            console.log('cargando');
              url = '../../controller/admin/create/like.php';
              dataLike = `id_publications=${btn.id}`;
              console.log(btn.parentNode.childNodes[3]);
              console.log(dataLike);
              fetchs(url,dataLike,btn.parentNode.childNodes[3]);
          }else{
            console.log('NO cargando');
              url = '../../controller/admin/create/dislike.php';
              dataLike = `id_publications=${btn.id}`;
              fetchs(url,dataLike,btn.parentNode.childNodes[3]);
          }
  }

    })
    .catch(error => console.log(error));
}
function filtrerPublications(){
      const data = `select=${filtro.value}`;
      fetch('../../controller/admin/create/filterPublication.php',{
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
                console.log(span.id);
                // console.log('ME DISTE CLICK');
                // console.log(span.id);
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