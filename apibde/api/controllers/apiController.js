'use strict';

var Event = require("../models/Event");
var Product = require("../models/Product");
var PDFDocument = require("pdfkit");

exports.list_all_events = function(req, res) {
  Event.getAllEvent(function(err, data) {
    if (err) {
      res.send(err);
    } else {
      res.json(data);
    }
  });
};

exports.list_all_past_events = function(req, res) {
  Event.getAllPastEvent(function(err, data) {
    if (err) {
      res.send(err);
    } else {
      res.json(data);
    }
  });
};

exports.list_all_future_events = function(req, res) {
  Event.getAllFutureEvent(function(err, data) {
    if (err) {
      res.send(err);
    } else {
      res.json(data);
    }
  });
};

exports.read_an_event = function(req, res) {
  Event.getEventById(req.params.id, function(err, data) {
    if (err) {
      res.send(err);
    } else {
      res.json(data);
    }
  });
};

exports.list_all_medias = function(req, res) {
  Event.getMediasByEvent(req.params.id, function(err, data) {
    if (err) {
      res.send(err);
    } else {
      res.json(data);
    }
  });
};

exports.list_all_ideas = function(req, res) {
  Event.getIdeas(function(err, data) {
    if (err) {
      res.send(err);
    } else {
      res.json(data);
    }
  });
};

exports.list_all_registered = function(req, res) {
  Event.getRegistered(req.params.id, function(err, data) {
    if (err) {
      res.send(err);
    } else {   
      var doc = new PDFDocument;
      doc.pipe(res);
      let date = "" + data[0].date;
      doc.fontSize(25).text("Inscrits " + data[0].title + " - " + date.slice(4,15), { align : "center"});

      let i = 0;
      for(let obj of data) {
        let tmp = "- " + obj.name + " " + obj.forename;
        doc.fontSize(15).text(tmp, 50, 150 + 15*i);
        i++
      }

      doc.end();
    }
  });
};

exports.list_all_products = function(req, res) {
  Product.getAllProducts(function(err, data) {
    if (err) {
      res.send(err);
    } else {
      res.json(data);
    }
  });
};

exports.read_a_product = function(req, res) {
  Product.getProductById(req.params.id, function(err, data) {
    if (err) {
      res.send(err);
    } else {
      res.json(data);
    }
  });
};

exports.list_products_by_category = function(req, res) {
  Product.getProductsByCategory(req.params.category, function(err, data) {
    if (err) {
      res.send(err);
    } else {
      res.json(data);
    }
  });
};

exports.read_basket = function(req, res) {
  Product.getBasketByUser(req.params.id, function(err, data) {
    if (err) {
      res.send(err);
    } else {
      res.json(data);
    }
  });
};

exports.read_order = function(req, res) {
  Product.getOrder(req.params.id, req.params.date, function(err, data) {
    if (err) {
      res.send(err);
    } else {
      res.json(data);
    }
  });
};
