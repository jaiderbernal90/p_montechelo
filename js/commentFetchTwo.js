//VARIABLES
const textarea = document.querySelector('.textareaElement');
let btnSendComm = document.querySelector('.btn-send');
let btnDelete = document.querySelectorAll('.delete-comment');
const containerComments = document.querySelector('.comment-container');
let data;


//EVENTLISTENER
//BUTTON DELETE
btnDelete.forEach(del => {
    del.addEventListener('click', () =>{
        Swal.fire({
            title: 'Eliminar comentario',
            text: "¿Seguro que quieres borrar este comentario de manera permanente?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Eliminar'
          }).then((result) => {
            if (result.isConfirmed) {
              deleteComment(del.id,btnSendComm.id)
              Swal.fire(
                'ELiminado!',
                'Se ha borrado el comentario exitosamente',
                'success'
              )
            }
          })
    })
})
//BUTTON SEND
btnSendComm.addEventListener('click', () => {
    console.log('clikc');
    if(textarea.value.length > 0){
        if(textarea.value.trim() != ''){
            //VARIABLES        
            const spinner = document.querySelector('.spinner-grow');

            btnSendComm.classList.add('d-none');
            btnSendComm.parentElement.classList.add('d-none');
            spinner.classList.remove('d-none');
            setTimeout(() => {
                btnSendComm.classList.remove('d-none');
                btnSendComm.parentElement.classList.remove('d-none');
                spinner.classList.add('d-none');
            },800)
            addCommentary(btnSendComm.id,textarea);
            setTimeout(() => {
                //RELOAD COMMENTS
                reloadComments(btnSendComm.id);
                //UPDATES COUNTS
                reloadCounts(btnSendComm.id);
            },500)
        }
    }
}) 
//FUNCTION RELOAD FUNCTIONS AND ADDEVENTLISTENER
function reloadComments(id){
    data = `id_publications=${id}`;
    fetch('../../controller/admin/create/viewCommentsInfo.php',{
        method:'POST',
        headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: data
    })
    .then(res => res.text())
    .then(count => {
        //ADD THE FETCH RESPONSE TO THE DOM
        containerComments.innerHTML = count;
        //VARIABLES RENAME   
        const btnSendComm = document.querySelector('.btn-send');
        let btnDelete = document.querySelectorAll('.delete-comment');
        const textarea = document.querySelector('.textareaElement');
        //EVENTLISTENER RENAME
        //DELETE
        btnDelete.forEach(del => {
            del.addEventListener('click', () =>{
                Swal.fire({
                    title: 'Eliminar comentario',
                    text: "¿Seguro que quieres borrar este comentario de manera permanente?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Eliminar'
                  }).then((result) => {
                    if (result.isConfirmed) {
                      deleteComment(del.id,btnSendComm.id)
                      Swal.fire(
                        'Eliminado!',
                        'Se ha borrado el comentario exitosamente',
                        'success'
                      )
                    }
                  })
            })
        })
        //ADD     
        btnSendComm.addEventListener('click', () => {
            if(textarea.value.length > 0){
                if(textarea.value.trim() != ''){
                    //VARIABLES        
                    const spinner = document.querySelector('.spinner-grow');

                    btnSendComm.classList.add('d-none');
                    btnSendComm.parentElement.classList.add('d-none');
                    spinner.classList.remove('d-none');
                    setTimeout(() => {
                        btnSendComm.classList.remove('d-none');
                        btnSendComm.parentElement.classList.remove('d-none');
                        spinner.classList.add('d-none');
                    },800)
                    addCommentary(btnSendComm.id,textarea);
                    setTimeout(() => {
                        //RELOAD COMMENTS
                        reloadComments(btnSendComm.id);
                        //UPDATES COUNTS
                        reloadCounts(btnSendComm.id);
                    },500)
                }
            }
        })    
    })
    .catch(error => console.log(error))
}
//FUNCTION ADD COMMENTS
function addCommentary(id,input){
    data = `comment=${input.value}&id_publications=${id}`;
    fetch('../../controller/admin/create/addComment.php',{
        method:'POST',
        headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: data
    })
    .then(res => res.text())
    .then(comment => {
        //RESTART INPUT
        input.value = '';
    })
    .catch(error => console.log(error))

}
//FUNCTION THAT BRINGS THE NEW NUMBER OF COMMENTS
function reloadCounts(id){
    data = `id_publications=${id}`;
    fetch('../../controller/admin/update/updateCounts.php',{
        method:'POST',
        headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: data
    })
    .then(res => res.text())
    .then(count => {
        //RESTART COUNT COMMENTS
            const containerComments = document.querySelector('.cont-coms');
            //VALIDATION ID COUNT
            if(containerComments.id === id){
                containerComments.childNodes[2].childNodes[0].innerHTML = count;
            }   
    })
    .catch(error => console.log(error))
}
//FUNCTIONS DELETE COMMENTS
function deleteComment(id,id_publications){
    data = `id=${id}`;
    fetch('../../controller/admin/delete/deleteComment.php',{
        method:'POST',
        headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: data
    })
    .then(res => res.text())
    .then(result => {
        setTimeout(() => {
            //UPDATES COUNTS
            reloadCounts(id_publications);
            //RELOAD COMMENTS
            reloadComments(id_publications);
        },500)
    })
    .catch(error => console.log(error))
}
