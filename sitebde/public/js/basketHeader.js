$(function (){
    $id = $(".idUser").attr("id");
    console.log($id);
    getOrders($id);
});
    
    
function getOrders($id) {
    $.ajax({
        type:'GET',
        url: "http://91.164.43.11:50000/basket/" + $id,

        success: function(orders) {
            console.log(orders.length)
           $("#basket").prepend(orders.length);
        }
    });
}
    