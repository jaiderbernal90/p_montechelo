const textarea = document.querySelector('textarea');
const domCom = document.querySelector('#comment');
if(!textarea){
  domCom.addEventListener('click',(e) => {
    if(e.target.className.includes("textarea")){
      e.target.addEventListener('keydown', autosize);
    }
  });
}else{
  textarea.addEventListener('keydown', autosize);
}
             
function autosize(){
  let el = this;
  setTimeout(function(){
    el.style.cssText = 'height:auto; padding:0';
    el.style.cssText = 'height:' + el.scrollHeight + 'px';
  },0);
}