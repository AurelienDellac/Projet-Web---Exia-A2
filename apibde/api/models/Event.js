'user strict';
var sql = require('./db.js');

//Event object constructor
var Event = function(){
};

Event.getMediasByEvent = function getMediasByEvent(id, result) {
    sql.query(`SELECT * FROM medias WHERE id = ?`, id, function (err, res) {                 
            if(err) {
                console.log("error: ", err);
                result(err, null);
            }
            else{
                result(null, res);
            }
        });   
};

Event.getEventById = function getEventById(id, result) {
        sql.query(`SELECT events.id as id, title, description, 
                        JSON_OBJECT("name", name, "forename", forename) as author, date, fee, img_src 
                    FROM events
                    INNER JOIN activities ON events.id_activity=activities.id
                    INNER JOIN users ON activities.id_author=users.id
                    WHERE masked = 0 AND events.id = ?
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

Event.getAllEvent = function getAllEvent(result) {
        sql.query(`SELECT events.id, title, description, date, fee, img_src from events 
                    INNER JOIN activities ON events.id_activity=activities.id
                    WHERE masked = 0`, function (err, res) {

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

module.exports=Event;