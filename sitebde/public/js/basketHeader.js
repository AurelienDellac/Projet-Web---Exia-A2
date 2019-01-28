$(function (){
    $id = $(".idUser").attr("id");
    getOrders($id);
});
    
    
function getOrders($id) {
    $.ajax({
        type:'GET',
        url: "http://10.133.129.169:3000/basket/" + $id,

        success: function(orders) {
           $("#basket").prepend(orders.length);
        }
    });
}
    