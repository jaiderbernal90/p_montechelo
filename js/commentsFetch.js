const contComments = document.querySelector('#comment');
const filtro = document.querySelector('#filtro');
const contModalCom = document.querySelector('#comment');
const spanModalCommen = document.querySelectorAll('.modal-span-com');
let data;

//EVENT LISTENER COMMENTS
spanModalCommen.forEach(span => {
    span.addEventListener('click', () => {
        // console.log('ME DISTE CLICK');
        // console.log(span.id);
        //CALL FUN VIEW COMMENTS SPICIFICATION
        viewComment(span.id);
    })
})

function addComment(id,input){
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
        input.value = '';
    })
    .catch(error => console.log(error))

}

//VIEW COMMENTS PUBLICATIONS
export function viewComment(id){
    data = `id_publications=${id}`;
    fetch('../../controller/admin/create/viewComments.php', {
        method:'POST',
        headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: data
    })
    .then(res => res.text())
    .then(comments => {
        //VIEW COMMENTS
        contModalCom.innerHTML = comments;
        //VARIABLES
        let btnSend = document.querySelector('.btn-send');
        let input = document.querySelector('.textareaElement');
        const spinner = document.querySelector('.spinner-grow');
        const btnDelete = document.querySelectorAll('.delete-comment'); 
        //EVENTLISTENER
        //DELETE
        if(btnDelete){
            btnDelete.forEach(btn => {
                btn.addEventListener('click', () => {
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
                            Swal.fire(
                                'Eliminado!',
                                'Se ha borrado el comentario exitosamente',
                                'success'
                              )
                            deleteComment(btn.id,btnSend.id)
                            setTimeout(() => {
                                //RELOAD COMMENTS
                                viewComment(btnSend.id);
                                //UPDATES COUNTS
                                reloadCounts(btnSend.id);
                            },500)
                        }
                      })
                })
            })
        }
        //ADD
        btnSend.addEventListener('click', () => {
            if(input.value.includes("<>") || input.value.includes("[]") || input.value.includes("||") || input.value.includes("{}")){
                alert('NO INSERTE CARÁCTERES EXTRAÑOS EN LOS COMENTARIOS');
            }else if(input.value.length > 0){
                btnSend.classList.add('d-none');
                btnSend.parentElement.classList.add('d-none');
                spinner.classList.remove('d-none');
                setTimeout(() => {
                    btnSend.classList.remove('d-none');
                    btnSend.parentElement.classList.remove('d-none');
                    spinner.classList.add('d-none');
                },800)
                addComment(btnSend.id,input);
                setTimeout(() => {
                    //RELOAD COMMENTS
                    viewComment(btnSend.id);
                    //UPDATES COUNTS
                    reloadCounts(btnSend.id);
                },500)
            }
        });
      })
    .catch(error => console.log(error))  
}

 //UPDATES COUNTS
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
            const containerComments = document.querySelectorAll('.cont-com');
            containerComments.forEach(comm => {
                if(comm.childNodes[1].id === id){
                    comm.childNodes[2].childNodes[0].innerHTML = count;
                }
            })
        })
        .catch(error => console.log(error))
 }
 //DELETE COMMETNS

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
            //RELOAD COMMENTS
            viewComment(id_publications);
            //UPDATES COUNTS
            reloadCounts(id_publications);
        },500)
    })
    .catch(error => console.log(error))
}
