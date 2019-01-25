$(function (){
    
    getProducts("");
    $("#formCategory")[0].reset();
    $('#sort').click(function() {
        getProducts($('input[name=cat]:checked').val());
        
    });
});

function getProducts($cat) {
    var $products = $('#products');
    $products.empty();
    $.ajax({
        type:'GET',
        url: "http://10.133.129.169:3000/products/" + $cat,
        success: function(products) {
            $.each(products, function(i, product){
                $products.append("<a class='card link' href='product/" + 
                product.id + 
                " '> <img class='card-img-top' src=" + 'images/produits/' + product.img_src +
                  " ' alt='Card image cap'> <div class='card-body'>  <h5 class='card-title'>" + product.label +
                   "</h5> <p class='card-description'>" + product.description +
                    "</p><p class='card-text'>" + product.price + 
                    "</p> </div> </a>");      
            });
                }
                       
    });
}