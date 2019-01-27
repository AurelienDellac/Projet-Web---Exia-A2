$(function (){
    $id = $(".basketPanel").attr("id");
    getBasket($id);
});
    
    
function getBasket($id) {
    $body = $(".basketBody");
    $body.empty();
    $.ajax({
        type:'GET',
        url: "http://91.164.43.11:50000/basket/" + $id,

        success: function(orders) {
            $total = 0;
            $.each(orders, function(i, order){
                $body.prepend(
                    '<a href="product/' + order.id_product + '">' +
                    '<div class="basketItem">' +
                        '<div class="basketLabel">' + order.label + '</div>' +
                        '<div class="basketLabel">Quantité : ' + order.quantity + '</div>' +
                        '<div class="basketLabel">Prix unitaire : ' + order.price + '€</div>' +
                        '<div class="basketLabel"><b>Total</b> : ' + order.total + '€</div>' +
                        '<form method="POST" action="destroyOrder/' + order.id + '" onsubmit="return confirm(\'Retirer ' + order.label + ' de la commande ?\');">' +
                            '<input type="hidden" name="_token" value="' + $("input[name=_token]").attr("value") + '">' +
                            '<button type="submit" class="btn btn-danger">-</button>' +
                        '</form>' + 
                    '</div></a>'
                );
                $total += order.total;      
            });
            $body.append(
                '<div class="basketTotal">' +
                    '<div class="basketLabel"><b>TOTAL</b> : ' + $total + '€</div>' +
                '</div>');
        }
    });
}