$(function (){
    var path = window.location.pathname;
    var fragmentedPath = path.split('/');
    var id = fragmentedPath[fragmentedPath.length-2];
    var date = fragmentedPath[fragmentedPath.length-1];
    getBasket(id, date);
});
    
    
function getBasket($id, $date) {
    $body = $(".basketBody");
    $title = $('#title');
    $body.empty();
    $title.empty();
    $.ajax({
        type:'GET',
        url: "http://10.133.129.169:3000/basket/" + $id + "/" + $date,

        success: function(orders) {
            $total = 0;
            $.each(orders, function(i, order){
                $body.prepend(
                    '<a href="/product/' + order.id_product + '">' +
                    '<div class="basketItem">' +
                        '<div class="basketLabel">' + order.label + '</div>' +
                        '<div class="basketLabel">Quantité : ' + order.quantity + '</div>' +
                        '<div class="basketLabel">Prix unitaire : ' + order.price + '€</div>' +
                        '<div class="basketLabel"><b>Total</b> : ' + order.total + '€</div>' +
                    '</div></a>'
                );
                $total += order.total;      
            });
            $body.append(
                '<div class="basketTotal">' +
                    '<div class="basketLabel"><b>TOTAL</b> : ' + $total + '€</div>' +
                '</div>'
            );
            $title.prepend("Commande " + orders[0].user.name + " " + orders[0].user.forename + " du " + $date);
        }
    });
}