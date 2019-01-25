$(function (){
    
var chemin = window.location.pathname;
var t = chemin.substring(9);
$y=t[0];

    getProducts($y);
    
});


function getProducts($y) {
    var $products = $('#products');
    $products.empty();
    $.ajax({
        type:'GET',
        url: "http://10.133.129.169:3000/products/" + $y,
        success: function(products) {
            $.each(products, function(i, product){
                $products.append("<img class='card-img-top' src=" + 'images/produits/' + product.img_src +
                  " ' alt='Card image cap'> <div class='card-body'>  <h5 class='card-title'>" + product.label +
                   "</h5> <p class='card-description'>" + product.description +
                    "</p><p class='card-text'>" + product.price + 
                    "</p> </div>");      
            });
                }
                       
    });

}