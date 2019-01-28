
$(document).change(function(){ 
    $val = $("#activite").val()
    console.log($("#activite").val());

});

function getActivity($val){

    $.ajax({
        type:'GET',

        url: "http://10.133.129.169:3000/activities/" + $val,

        success: function(event) {

        $.each(event, function(i, activity){
            $event.append(
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