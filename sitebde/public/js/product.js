$(function (){
    
var chemin = window.location.pathname;
var t = chemin.substring(9);

    getProducts(t);
    
});


function getProducts(t) {
    var $products = $('#products');
    $products.empty();
    $.ajax({
        type:'GET',
        url: "http://91.164.43.11:50000/products/" + t,
        success: function(products) {
            $.each(products, function(i, product){
                $products.append(" <div class='container pt-5'> <div class='row'> <div class='col-md-12 text-center'> <div class='col-md-6 no-padding lib-item' data-category='view'> <div class='lib-panel'> <div class='row box-shadow w-100'> <div class='col-md-6 image-row'> <img src='/images/produits/" + product.img_src +
                " ' alt='Card image cap'> </div> <div class='col-md-6 card-text'> <div class='lib-row lib-header text pl-5'> <span class='blue'>" + product.label +
                 "</span> <div class='lib-header-seperator'></div> </div><hr> <div class='lib-row lib-desc pl-5 text-left '>" + product.description +
                  "</div> <hr> <div class='product-price'>" + product.price + "€</div><hr><button type='submit' class='btn btn-success'> Ajouter au panier  </button></div> </div> </div> </div> </div> </div> </div> " );           
            });
                }
                       
    });

}
