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
                    $ideas.append("<a class='card link'> <img class='card-img-top' src=" + '/images/events/' + idea.img_src +
                      " ' alt='Card image cap'> <div class='card-body'>  <h5 class='card-title'>" + idea.title +
                       "</h5> <p class='card-description'>" + idea.description +
                        "</p><p class='card-text'> Votes :" + idea.votes + 
                        "</p> </div> </a>");      
                });
                    }
                           
        });
    
    }
    
