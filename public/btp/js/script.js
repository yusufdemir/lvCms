$(document).ready(function() {

  $("#eventCalendar").eventCalendar({
    eventsjson: '/event/',
    jsonDateFormat: 'human',  // 'YYYY-MM-DD HH:MM:SS'
    eventsLimit: 1,
    moveSpeed: 30,
    moveOpacity: 0.5,
    currentText: 'bugün',
    monthNames: ['Ocak','Şubat','Mart','Nisan','Mayıs','Haziran',
    'Temmuz','Ağustos','Eylül','Ekim','Kasım','Aralık'],
    monthNamesShort: ['Oca','Şub','Mar','Nis','May','Haz',
    'Tem','Ağu','Eyl','Eki','Kas','Ara'],
    dayNames: ['Pazar','Pazartesi','Salı','Çarşamba','Perşembe','Cuma','Cumartesi'],
    dayNamesShort: ['Pz','Pt','Sa','Ça','Pe','Cu','Ct'],
    dayNamesMin: ['Pz','Pt','Sa','Ça','Pe','Cu','Ct'],
    txt_noEvents: "Etkinlik bulunmuyor.",
    txt_SpecificEvents_prev: "",
    txt_SpecificEvents_after: "etkinlikler:",
    txt_next: "Sonraki",
    txt_prev: "Önceki",
    txt_NextEvents: "Sıradaki Etkinlik:",
    txt_GoToEventUrl: "Etkinliğe Git",
  });

    jQuery('.accordion').accordion({ 
        active: false, 
        header: '.head', 
        navigation: true, 
        event: 'click',  
        animated: 'easeslide',
        clearStyle: true,
        collapsible: true
    });
    /*$(".accordion").collapse({
        toggle: true
    })*/

});