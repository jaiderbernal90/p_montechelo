//Variables
const month = document.querySelector('#month').innerHTML;
const daysUser = document.querySelector('#day').innerHTML;
const year = (new Date).getFullYear(); 


//API FULLCALENDAR CODE
$('#calendar').fullCalendar({
    header: {
         language: 'es',
         center: 'title',
    },
    defaultDate: year+"-"+month+"-"+daysUser.substr(0,2),
    editable: false,
    eventLimit: false, // allow "more" link when too many events
    selectable: false,
    selectHelper: false
});

//VALIDARION DAY BIRTH 
const values = document.querySelectorAll('.fc-day-number');
values.forEach(day =>{
    if(parseInt(day.innerHTML) === parseInt(daysUser.substr(0,2)) && day.parentElement.className.includes('fc-other-month') === false){
        day.parentElement.classList.add("day-Cumple");
    }
});