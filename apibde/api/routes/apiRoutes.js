'use strict';
module.exports = function(app) {
  var api = require('../controllers/apiController.js');

  app.route('/events')
    .get(api.list_all_events);

  app.route('/events/:id')
    .get(api.read_an_event);

  app.route('/events/:id/medias')
    .get(api.list_all_medias);
    
  app.route('/ideas')
    .get(api.list_all_ideas);
};