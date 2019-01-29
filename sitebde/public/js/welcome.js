var days = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
var months = ["Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Decembre"];

$(function (){
    var $produits = $('#produits');
    var $evenements = $('#evenements');
    $evenements.empty();
    $produits.empty();
    generateCarouselEvent($evenements);
    generateCarouselProduits($produits)
});

function generateCarouselEvent($evenements){
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
                    div = "<a class='carousel-item active' " ;
                }
                else{
                    div = "<a class='carousel-item' ";
                }
                div = div + "href=' /evenement/"+ evenements[i].id +"'>";
                $evenements.append(
                    div +
                    "<img src='/images/" + evenements[i].img_src +"' alt='le texte' id='monImage'>"+
                    "<div class='carousel-caption'>"+
                        "<h3>" + evenements[i].title + "</h3>"+
                        "<p>" + days[date.getDay()] +" "+ date.getDate() +" " + months[date.getMonth()]  + "</p>"+
                    "</div>"+
                "</a>"
                );
            }
        }
    });
}   

function generateCarouselProduits($produits){
    $.ajax({
        type:'GET',
        url: "http://10.133.129.169:3000/products/sales",
        success: function(produits) {
            var i;
            var max = 3;
            var div;
            if(produits.length < 3){
                max = produits.length;
            }

            for(i =0; i < max; i++){
                if(i ==0){
                    div = "<a class='carousel-item active' " ;
                }
                else{
                    div = "<a class='carousel-item' "  ;
                }
                div = div + "href=' /product/"+ produits[i].id +"'>";
                $produits.append(

                    div +
                    "<img src='/images/" + produits[i].img_src +"' alt='image of " + produits[i].label + "' id='monImage'>"+
                    "<div class='carousel-caption'>"+
                        "<h3>" + produits[i].label + "</h3>"+
                        "<p>" + produits[i].price + " €" + "</p>"+
                    "</div>"+
                "</a>"
                );
            }
        }
    });
}   
