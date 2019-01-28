$(function (){
    
    
        getIdeas();
        
    });
    
    function getIdeas() {
        var $ideas = $('#ideas');
        $ideas.empty();
        $.ajax({
            type:'GET',

            url: "http://10.133.129.169:3000/ideas/",

            success: function(ideas) {
                $.each(ideas, function(i, idea){
                    $ideas.append(
                        "<div class='container pt-5'>"+
                            "<div class='row'>" + 
                                "<div class='col-md-12 text-center'>" + 
                                    "<div class='col-md-6 no-padding lib-item' data-category='view'>" +
                                        "<div class='lib-panel'> <div class='row box-shadow w-100'>" +
                                            "<div class='col-md-6 image-row'> <img src='Images/" + idea.img_src + " ' alt='Card image cap'>"+ 
                                            "</div>" +
                                            "<div class='col-md-6 card-text'>" +
                                                "<div class='lib-row lib-header text pl-5'>" +
                                                    "<span class='blue'>" +
                                                        idea.title +
                                                    "</span>" +

                                                    "<div class='lib-header-seperator'></div>" +
                                                    "</div> <hr>" +

                                                    "<div class='lib-row lib-desc pl-5 text-left '>" + idea.description + 
                                                    "</div>" +
                                                "</div>"+
                                            "</div>"+
                                        "</div>"+
                                    "</div>"+
                                "</div>"+
                            "</div>"+
                        "</div> ");    
                });
                    }
                           
        });
    
    }
    
