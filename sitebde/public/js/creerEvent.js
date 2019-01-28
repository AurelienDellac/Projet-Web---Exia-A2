
$(document).change(function(){ 
    $val = $("#activite").val()
    console.log($("#activite").val());
    getActivity($val);
    
});

function getActivity($val){
    var $acti = $('#event');
    $acti.empty();


    $.ajax({
        type:'GET',

        url: "http://10.133.129.169:3000/activities/" + $val,

        success: function(acti) {

        $.each(acti, function(i, activity){
            $acti.append(
                "<div class='form-group col-md-2'>" +
                "<label for='name'> Nom</label>" +
                "<p type='text' class='form-control' id='name' name='name' >" + activity.title +
                "</p>" +
                "</div>"+ 
                "<div class='form-group col-md-12'>" +
                "<label for='description'> Description</label>" +
                "<p type='description' class='form-control' id='description' name='description' >" + activity.description +
                "</p>" +
                "</div>"); 
                
        });
    }
    });
}