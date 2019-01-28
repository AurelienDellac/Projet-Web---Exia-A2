$(function (){
    var chemin = window.location.search;
    getEvents("none");
});

function getEvents($order) {
    var $evenements = $('#evenements');
    $evenements.empty();
    $.ajax({
        type:'GET',
        url: "http://91.164.43.11:50000/events",
        success: function(evenements) {

            if($order == "down") {
                products.sort(function (a, b) {
                    return (a.price - b.price);
                });
            } else if($order == "up") {
                products.sort(function (a, b) {
                    return (b.price - a.price);
                });
            }

            $.each(evenements, function(i, evenement){
                var date = new Date(evenement.date);
                var days = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
                var months = ["Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Decembre"];

                $evenements.append(
                    "<a class='card link' id='cardContent href='evenement/" + evenement.id +" '>" + 
                        "<div id='cardContent'>"+
                            "<img class='card-img column left' src=" + 'images/' + evenement.img_src +" alt='Card image cap'>" +
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