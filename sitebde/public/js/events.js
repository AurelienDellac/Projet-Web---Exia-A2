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
                $evenements.append("<a class='card link' href='evenement/" + 
                evenement.id + 
                " '> <img class='card-img-top' src=" + 'images/events/' + evenement.img_src +
                " ' alt='Card image cap'> <div class='card-body'>  <h5 class='card-title'>" + evenement.title +
                "</h5> <p class='card-description'>" + evenement.description +
                    "</p><p class='card-text'>" + evenement.date + 
                    "</p> </div> </a>");      
            });
        }             
    });
}