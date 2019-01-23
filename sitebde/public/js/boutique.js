$(function () {
    baseUrl = 'http://10.133.129.169:3000/products';


$('#blabla button').click(function(e){
    e.preventDefault();
var params = {
    url: baseUrl,
    method: 'GET'
};


$.ajax(params).done(function (response) {
    console.log(response);

    $('.card-title').text(response[0].label);
    $('.card-description').text(response[0].decription);
    
    var image = response.weather[0].img_src;
    $('.card-img-top').attr('/images/produits/' + image);
})
.fail(function () {
    console.log('err');
});
});
});
