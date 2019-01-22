'use strict';
module.exports = function(app) {
  var api = require('../controllers/apiController.js');

  app.route('/events')
    .get(api.list_all_events);

  app.route('/events/:id')
    .get(api.read_an_event);

  app.route('/events/:id/comments')
    .get(api.list_all_comments);
};