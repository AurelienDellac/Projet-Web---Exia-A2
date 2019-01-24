
$(function (){
    var $products = $('#products');
    var formCategory = document.getElementsByName('categorie');
    var form_value;
    for(var i = 0; i < formCategory.length; i++){
    if(formCategory[i].checked){
        form_value = formCategory[i].value;
    }
}
    $.ajax({
        type:'GET',
        url: "http://10.133.129.169:3000/products/" + form_value,
        success: function(products) {
            $.each(products, function(i, product){
                $products.append("<a class='card link' href='produit/" + 
                product.id + 
                " '> <img class='card-img-top' src=" + 'images/produits/' + product.img_src +
                  " ' alt='Card image cap'> <div class='card-body'>  <h5 class='card-title'>" + product.label +
                   "</h5> <p class='card-description'>" + product.description +
                    "</p><p class='card-text'>" + product.price + 
                    "</p> </div> </a>");
                   
            });
                }
                       
    });
});

$function form(){

}