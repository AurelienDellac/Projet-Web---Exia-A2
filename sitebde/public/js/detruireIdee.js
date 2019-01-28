$(function (){
    getIdeas();
});

function getIdeas() {
    var $ideas = $('#ideas');
    $ideas.empty();
    $.ajax({
        type:'GET',
        url: "http://91.164.43.11:50000/ideas/",

        success: function(ideas) {
            $.each(ideas, function(i, idea){
                $ideas.append(
                    `<div class="container pt-5">
                        <div class="row">
                            <div class='col-md-12 text-center'>
                                <div class='col-md-6 no-padding lib-item' data-category='view'>
                                    <div class='lib-panel'> <div class='row box-shadow w-100'>
                                        <div class='col-md-6 image-row'> <img src='Images/` +idea.img_src + ` ' alt='Card image cap'>
                                        </div>
                                        <div class='col-md-6 card-text'>
                                            <div class='lib-row lib-header text pl-5'>
                                                <span class='blue'>
                                                        `+ idea.title +`
                                                </span>

                                                <div class='lib-header-seperator'>
                                                </div>
                                            </div> 
                                            <hr>
                                            <div class='lib-row lib-desc pl-5 text-left '> 
                                                `+ idea.description +`
                                            </div>
                                            <hr> 
                                            <div class='lib-row lib-desc pl-5 text-center'> 
                                                <b>Nombre de votes : `+ idea.votes +` </b>
                                            </div> 
                                            </div>
                                            <form class="non" method="POST" action="/detruireIdee" onsubmit="return confirm('detruire : ` + idea.title + `');">
                                                 <input type="hidden" name="_token" value=" `+ $("input[name=_token]").attr("value") +` "> 
                                                <button type="submit" class="btn btn-danger" name="idee" value=`+ idea.id +`>
                                                    DETRUIRE 
                                                </button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> `
                    );    
                });
        }
                        
    });
}

