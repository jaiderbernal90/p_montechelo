function laHoraEs () {
    var fecha = new Date();

    var horas = fecha.getHours(),
        minutos = fecha.getMinutes(),
        segundos = fecha.getSeconds();


 if (horas < 10) {
  horas = "0" + horas
}
var pHora = document.getElementById('horas')
  pHora.textContent = horas

  if (minutos < 10) {
  minutos = "0" + minutos
}
var pMinuto = document.getElementById('minutos')
  pMinuto.textContent = minutos

if (segundos < 10) {
  segundos = "0" + segundos
}
var pSegundos = document.getElementById('segundos')
  pSegundos.textContent = segundos
}

setInterval(laHoraEs,1000)

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