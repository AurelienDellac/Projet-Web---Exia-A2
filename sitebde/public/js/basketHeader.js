$(function (){
    $id = $(".idUser").attr("id");
    getOrders($id);
});
    
    
function getOrders($id) {
    $.ajax({
        type:'GET',
        url: "http://91.164.43.11:50000/basket/" + $id,

        success: function(orders) {
           $("#basket").prepend(orders.length);
        }
    });
}
    