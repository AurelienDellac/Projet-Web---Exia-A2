'user strict';
var sql = require('./db.js');

//Event object constructor
var Event = function(){
};

Event.getAllEvent = function getAllEvent(result) {
        sql.query(`SELECT events.id, title, description, date, fee, img_src from events 
                    INNER JOIN activities ON events.id_activity=activities.id
                    WHERE masked IS null
                    ORDER BY date DESC`, function (err, res) {

                if(err) {
                    console.log("error: ", err);
                    result(null, err);
                }
                else{
                 console.log('Events : ', res);  
                 result(null, res);
                }
            });   
};

Event.getAllPastEvent = function getAllPastEvent(result) {
    sql.query(`SELECT events.id, title, description, date, fee, img_src from events 
                INNER JOIN activities ON events.id_activity=activities.id
                WHERE masked IS null AND date < CURDATE()
                ORDER BY date DESC`, function (err, res) {

            if(err) {
                console.log("error: ", err);
                result(null, err);
            }
            else{
             console.log('Events : ', res);  
             result(null, res);
            }
        });   
};

Event.getAllFutureEvent = function getAllFutureEvent(result) {
    sql.query(`SELECT events.id, title, description, date, fee, img_src from events 
                INNER JOIN activities ON events.id_activity=activities.id
                WHERE masked IS null AND date >= CURDATE()
                ORDER BY date ASC`, function (err, res) {

            if(err) {
                console.log("error: ", err);
                result(null, err);
            }
            else{
             console.log('Events : ', res);  
             result(null, res);
            }
        });   
};

Event.getEventById = function getEventById(id, result) {
    sql.query(`SELECT events.id as id, title, description, 
                    JSON_OBJECT("id", users.id, "name", name, "forename", forename) as author, date, fee, img_src 
                FROM events
                INNER JOIN activities ON events.id_activity=activities.id
                INNER JOIN users ON activities.id_author=users.id
                WHERE masked IS null AND events.id = ?
                GROUP BY id`, id, function (err, res) {   
                             
            if(err) {
                console.log("error: ", err);
                result(err, null);
            }
            else{
                res.forEach(element => {
                    element.author = JSON.parse(element.author);
                });

                result(null, res);
            }
        });   
};

Event.getMediasByEvent = function getMediasByEvent(id, result) {
    sql.query(`SELECT tmp.id, src, author, comments, COUNT(likes.id_media) as likes 
                FROM (SELECT medias.id AS id, src, 
                JSON_OBJECT("id", users.id, "name", users.name, "forename", users.forename) AS author,
                JSON_ARRAYAGG(
                    JSON_OBJECT(
                        "content", content, 
                        "author", JSON_OBJECT("id", users2.id, "name", users2.name, "forename", users2.forename)
                    )
                ) AS comments
               FROM medias 
               INNER JOIN users on medias.id_author=users.id
               LEFT JOIN comments ON medias.id=comments.id_media
               LEFT JOIN users AS users2 on comments.id_author=users2.id
               WHERE id_event = ? AND medias.masked IS null AND comments.masked IS null
               GROUP BY medias.id) as tmp 
               LEFT JOIN likes on tmp.id=likes.id_media
               GROUP BY tmp.id`, id, function (err, res) {                 
            if(err) {
                console.log("error: ", err);
                result(err, null);
            }
            else{
                res.forEach(element => {
                    element.author = JSON.parse(element.author);
                    element.comments = JSON.parse(element.comments);
                    if (element.comments[0].content == null) {
                        element.comments = [];
                    }
                });
                result(null, res);
            }
        });
};

Event.getIdeas = function getIdeas(result) {
    sql.query(`SELECT title, description, img_src, COUNT(id_user) as votes 
               FROM votes
               INNER JOIN activities ON votes.id_activity=activities.id
               WHERE masked IS null
               GROUP BY id_activity`, function (err, res) {
                             
            if(err) {
                console.log("error: ", err);
                result(err, null);
            }
            else{
                result(null, res);
            }
        });   
};

Event.getRegistered = function getRegistered(id, result) {
    sql.query(`SELECT title, date, name, forename FROM registrations 
               INNER JOIN users ON users.id=registrations.id_user
               INNER JOIN events ON events.id=registrations.id_event
               INNER JOIN activities ON activities.id=events.id_activity
               WHERE id_event = ?`, id, function (err, res) {
                             
            if(err) {
                console.log("error: ", err);
                result(err, null);
            }
            else{
                result(null, res);
            }
        });   
};

module.exports=Event;