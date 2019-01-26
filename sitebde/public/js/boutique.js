$(function (){
    $("#formCategory")[0].reset();
    $('#searchForm')[0].reset();
    var chemin = window.location.search;
    var vals = chemin.substr(1).split('&');
    var cat = vals[0].split("=")[1];
    if (cat == undefined) {
        cat = "";
    } else {
        cat = "category/" + cat;
        setCategory(cat);
    }

    getProducts(cat, "none");
    $('#sort').click(function() {
        getProducts($('input[name=cat]:checked').val(), $('input[name=price]:checked').val());
        
    });
    setAutoComplete();
});

function getProducts($cat, $order) {
    if($cat == undefined) {
        $cat = "";
    }

    var $products = $('#products');
    $products.empty();
    $.ajax({
        type:'GET',
        url: "http://91.164.43.11:50000/products/" + $cat,
        success: function(products) {

            if($order == "down") {
                products.sort(function (a, b) {
                    return (a.price - b.price);
                });
            } else if($order == "up") {
                products.sort(function (a, b) {
                    return (b.price - a.price);
                });
            }

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

function setCategory($cat) {
    console.log(':radio[name=cat][value="' + $cat +'"]');
    let box = ':radio[name=cat][value="' + $cat +'"]';
    $('#formCategory').find(box).prop('checked', true);
}

function setAutoComplete() {
    $.ajax({
        type:'GET',
        url: "http://91.164.43.11:50000/products/",
        success: function(products) {
            
            var productList = [];
            $.each(products, function(i, product){
                productList.push({"label" : product.label, "value" : product.id});
            });
            console.log(products);
            $("#search").autocomplete({
                source : productList,

                select : function(event, ui) {
                    event.preventDefault();
                    getProducts(ui.item.value);
                    $("#search").val(ui.item.label);
                },
                focus: function(event, ui) {
                    event.preventDefault();
                    $("#search").val(ui.item.label);
                },
            })
        }               
    });
}
