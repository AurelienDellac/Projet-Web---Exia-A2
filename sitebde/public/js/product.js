$(function (){
    
var chemin = window.location.pathname;
var t = chemin.split('/');
$y=t[2];
getProducts($y);
});


function getProducts(t) {
    var $imagePanel = $('#imagePanel');
    var $infoPanel = $('#infoPanel');
    $imagePanel.empty();
    $.ajax({
        type:'GET',

        url: "http://91.164.43.11:50000/products/" + t,

        success: function(products) {
            product = products[0];
           $imagePanel.html("<img src='/images/" + product.img_src + " ' alt='Card image cap'>");
            $infoPanel.prepend(
                "<div class='lib-row lib-header text pl-5'>" +
                    "<span class='blue'>" + product.label + "</span>" +
                    "<div class='lib-header-seperator'></div>" +
                "</div>" +
                "<hr>" +
                "<div class='lib-row lib-desc pl-5 text-left '>" + product.description + "</div>" +
                "<hr>" +
                "<div class='product-price'>" + product.price + "€</div>");
        }
    });
}
