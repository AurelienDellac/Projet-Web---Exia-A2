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
    var $image = $('.eventImage');
    $.ajax({
        type:'GET',
        url: "http://10.133.129.169:3000/events/" + $id,
        success: function(evenement) {
            evenement = evenement[0];
            var date = new Date(evenement.date);
            console.log(evenement);
            var days = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
            var months = ["Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Decembre"];
            
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
    window.open("http://10.133.129.169:3000/events/" + $id + "/registrations");
}
