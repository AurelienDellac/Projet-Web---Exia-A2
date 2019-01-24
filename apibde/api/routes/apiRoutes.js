'use strict';
module.exports = function(app) {
  var api = require('../controllers/apiController.js');

  app.route('/events')
    .get(api.list_all_events);
  
  app.route('/events/past')
    .get(api.list_all_past_events);

  app.route('/events/future')
    .get(api.list_all_future_events);

  app.route('/events/:id')
    .get(api.read_an_event);

  app.route('/events/:id/medias')
    .get(api.list_all_medias);
    
  app.route('/ideas')
    .get(api.list_all_ideas);

  app.route('/events/:id/registrations')
    .get(api.list_all_registered);
  
  app.route('/products')
    .get(api.list_all_products);

  app.route('/products/:id')
    .get(api.read_a_product);

  app.route('/products/:category')
    .get(api.list_products_by_category);
  
  app.route('/basket/:id')
    .get(api.read_basket);
};