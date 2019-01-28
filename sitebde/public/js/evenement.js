var days = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
var months = ["Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Decembre"];

$(function (){
    var path = window.location.pathname;
    var fragmentedPath = path.split('/');
    var id = fragmentedPath[fragmentedPath.length-1];
    getEvents(id);
    $('#pdf').click(function() {
        getRegistrations(id);
    });
});

function getEvents($id) {
    $.ajax({
        type:'GET',
        url: "http://91.164.43.11:50000/events/" + $id,
        success: function(evenement) {
            evenement = evenement[0];
            var date = new Date(evenement.date);            
            $('.eventImage').prop("src", "/images/" + evenement.img_src);
            $('#titleEvent').html("<h2>" + evenement.title + "</h2>");
            $('#dateEvent').html("<h2>" + days[date.getDay()] + " " + date.getDate() + " " + months[date.getMonth()] + "</h2>");
            $('#descriptionEvent').html(evenement.description);
            if (evenement.fee == null) {
                $('#priceEvent').html("GRATUIT");
            } else {
                $('#priceEvent').html(evenement.fee + "€");
            }
            
        }             
    });
}

function getRegistrations($id) {
    window.open("http://91.164.43.11:50000/events/" + $id + "/registrations");
}
