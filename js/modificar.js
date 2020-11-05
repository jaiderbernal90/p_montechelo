//Variables
const btnModificar = document.querySelector('#mod');
const btnSave = document.querySelector('#save');

//AddEventListener
btnModificar.addEventListener('click',unlockInfo)

function unlockInfo() {
        btnModificar.setAttribute('disabled', true);
        inputBlock= document.getElementsByClassName("blockInput");
            for (var i=0;i<inputBlock.length;i++) {
                inputBlock[i].removeAttribute("readonly");
            }
            selectBlock=document.getElementsByClassName("seleccionar");
            btnMod = document.querySelector('#mod');
            for (var i=0;i<selectBlock.length;i++) {
                selectBlock[i].removeAttribute("disabled");
            }

}