var days = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
var months = ["Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Decembre"];

$(function (){
    var $contenue = $('#contenue');
    var $evenements = $('#evenements');
    $evenements.empty();
    $.ajax({
        type:'GET',
        url: "http://10.133.129.169:3000/events/",
        success: function(evenements) {
            var i;
            var max = 3;
            var div;
            if(evenements.length < 3){
                max = evenements.length;
            }

            for(i =0; i < max; i++){
                
                    var date = new Date(evenements[i].date);

                    if(i ==0){
                        div = "<div class='carousel-item active'>" ;
                    }
                    else{
                        div = "<div class='carousel-item'>"  
                    }
                    $contenue.append(
                        div +
                        "<img src='/images/" + evenements[i].img_src +"' alt='le texte' id='monImage'>"+
                        "<div class='carousel-caption'>"+
                            "<h3>" + evenements[i].title + "</h3>"+
                            "<p>" + days[date.getDay()] +" "+ date.getDate() +" " + months[date.getMonth()]  + "</p>"+
                        "</div>"+
                    "</div>"
                    );
            }
        }
    });
});
