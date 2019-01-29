var days = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
var months = ["Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Decembre"];

$(function (){
    var path = window.location.pathname;
    var fragmentedPath = path.split('/');
    var id = fragmentedPath[fragmentedPath.length-1];
    getMedias(id);
    getEvents(id);
    $('#pdf').click(function() {
        getRegistrations(id);
    });
});

function getEvents($id) {
    $.ajax({
        type:'GET',
        url: "http://10.133.129.169:3000/events/" + $id,
        success: function(evenement) {
            evenement = evenement[0];
            var date = new Date(evenement.date);
            
            if (date.getTime() > new Date().getTime()) {
                $(".share").remove();
                $(".mediaPanel").remove();
            } else {
                $("#subscribe").remove();
            }

            $('#eventImage').prop("src", "/images/" + evenement.img_src);
            $('#titleEvent').html("<h2>" + evenement.title + "</h2>");
            $('#dateEvent').html("<h2>" + days[date.getDay()] + " " + date.getDate() + " " + months[date.getMonth()] + "</h2>");
            $('#descriptionEvent').html(evenement.description);
            $('#contactEvent').html("Responsable : <a href='mailto:communication@bdecesibordeaux.fr'>" + evenement.author.mail + "</a>");
            if (evenement.fee == null || evenement.fee == 0) {
                $('#priceEvent').html("GRATUIT");
            } else {
                $('#priceEvent').html(evenement.fee + "€");
            }
        }             
    });
}

function getMedias($id) {
    $token = `<input type="hidden" name="_token" value="` + $("input[name=_token]").attr("value") + `">`;
    $('.mediaPanel').remove();
    $.ajax({
        type:'GET',
        url: "http://10.133.129.169:3000/events/" + $id + "/medias",
        success: function(medias) {
            $.each(medias, function(i, media){
                $('.eventContainer').append(
                    `<div class="mediaPanel" id="` + media.id + `">
                        <div class="mediaPhotoPanel">
                            <img class="mediaPhoto" src="/images/` + media.src + `" alt="evenement media photo">
                        </div>
                        <div class="mediaCredit">Patagé par ` + media.author.forename + ` ` + media.author.name +`</div>   
                        <div class="mediaLike">
                            <form method="POST" action="/aimerPhoto">
                                ` + $token +`
                                <button type="submit" class="btn" name="media" value="` + media.id + `">
                                    <i class="fas fa-thumbs-up fa-2x"></i>
                                </button>
                            </form>
                            <div>` + media.likes +`</div>
                        </div>
                    </div>`
                );
                
                $.each(media.comments, function (i, comment) {
                    $('#' + media.id).append(
                        `<div class="mediaPost">
                            <div class="mediaComment">
                                <div class="commentHead"> ` + comment.author.forename + ` ` + comment.author.name + `</div>
                                <div class="commentContent">
                                    `+ comment.content +`
                                </div>
                            </div>
                        </div>`
                    );
                });

                $('#' + media.id).append(
                    `<div class="mediaPost">
                        <div class="mediaComment">
                            <div class="commentHead">
                                Ajouter commentaire
                            </div>
                            <div class="commentContent">
                                <form method="POST" action="/posterCommentaire">
                                    ` + $token +`
                                    <input type="text" name="content" placeholder="Commentaire" required class="form-control">
                                    <button type="submit" class="btn btn-secondary" name="media" value="` + media.id + `">Envoyer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>`
                );           
            });
        }             
    });
}

function getRegistrations($id) {
    window.open("http://10.133.129.169:3000/events/" + $id + "/registrations");
}
