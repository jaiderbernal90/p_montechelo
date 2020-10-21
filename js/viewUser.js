
//Variables
    const id = document.querySelector('eye-id');


//AddEventListener

    id.addEventListener('click',viewUser);



function viewUser(){
    data = `id=${id.value}`;

    fetch('infoUser.php',{
        method:'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: data
        .then(res => res.text())
	    .then(val => {
            document.querySelector(`#${id}`).innerHTML = val;
        })
	    .catch(error => console.log(error))
})





};