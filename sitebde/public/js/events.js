var days = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
var months = ["Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Decembre"];

$(function (){
    var chemin = window.location.search;
    var t = chemin.split('=');
    var y=t[1];
    if(y == undefined){
        y = "";
    }
    setCategory(y);
    getEvents(y);

    $('#sort').click(function() {
        getEvents($('input[name=time]:checked').val());
        
    });
});

function getEvents($order) {
    var $evenements = $('#evenements');
    $evenements.empty();
    $.ajax({
        type:'GET',
        url: "http://10.133.129.169:3000/events/" +$order,
        success: function(evenements) {

            $.each(evenements, function(evenement){
                var date = new Date(evenement.date);

                $evenements.append(
                    "<a class='card link' id='cardContent' href='/evenement/" + evenement.id +" '>" + 
                            "<img class='card-img column left' src=" + 'images/' + evenement.img_src +" alt='Card image cap'>" +
                        "<div id='cardContent'>"+
                            "<div class='card-body column center'>"+  
                                "<h5 class='card-title'>" + evenement.title + "</h5>"+
                                "<p class='card-description'>" + evenement.description + "</p>"+
                            "</div>"+
                            "<div class='card-body column right'>"+
                                "<h5 class='card-text'>" + days[date.getDay()] +" "+ date.getDate() +" " + months[date.getMonth()]  + "</h5>"+
                            "</div>"+
                        "</div>"+
                    "</a>");      
            });
        }             
    });
}

function setCategory($time) {
    console.log($time);
    let box = ':radio[name=time][value="' + $time +'"]';
    $('#formCategory').find(box).prop('checked', true);
}