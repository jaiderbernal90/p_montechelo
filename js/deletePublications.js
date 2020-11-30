// VARIABLES 
const btndelete = document.querySelectorAll('.btn-delete');

btndelete.forEach(btn => {
    btn.addEventListener('click', () =>{
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
                    'Eliminada!',
                    'Se ha borrado la publicación exitosamente',
                    'success'
                )
                deleteButton(btn.id);
                setTimeout(() => {
                    //RELOAD PUBLICATIONS
                    viewPublications(btnSend.id);
                    //UPDATES COUNTS
                    reloadCounts(btnSend.id);
                },500)
            }
          })
    })
})

function deleteButton(id){
    const data = `id=${id}`;
    fetch('../../controller/admin/delete/deletePublication.php',{
        method:'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: data
    })
    .then( res => res.text() )
    .then( res => { 
        console.log(res);
    })
    .catch(error => console.log(error));
}