$(function (){
    $("#title").reset();
    $("#fee").reset();
    $("#date").reset();
    $("#description").reset();
    $("#image").reset();

    var chemin = window.location.search;
    var vals = chemin.substr(1).split('&');
    var cat = vals[0].split("=")[1];
    if (cat == undefined) {
        cat = "";
    } else {
        cat = "category/" + cat;
        
    }
    
    getProducts(cat, "none");
    setCategory(cat);
});

    function getProducts($cat, $order) {
        if($cat == undefined) {
            $cat = "";
        }
    
        var $products = $('#products');
        $products.empty();
        $.ajax({
            type:'GET',
    
            url: "http://10.133.129.169:3000/products/" + $cat,
          
            success: function(products) {
    
                
    
                $.each(products, function(i, product){
                    $products.append(
                        "<a class='card link' href='product/" + product.id + " '>" +
                            "<img class='card-img-top' src=" + 'images/' + product.img_src + " alt='Card image cap'>" +
                            "<div class='card-body'>" + 
                                "<h5 class='card-title'>" + product.label + "</h5>" +
                                "<p class='card-description'>" + product.description + "</p>"+
                                "<p class='card-text'>" + product.price + "€</p>"+
                            "</div>"+
                        "</a>"); 
                });
            }             
        });
    }