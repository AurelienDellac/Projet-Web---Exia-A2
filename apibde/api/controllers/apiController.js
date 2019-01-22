'use strict';

var Event = require("../models/Event");

exports.list_all_events = function(req, res) {
  Event.getAllEvent(function(err, event) {
    if (err) {
      res.send(err);
    } else {
      res.json(event);
    }
  });
};

exports.read_an_event = function(req, res) {
  Event.getEventById(req.params.id, function(err, event) {
    if (err) {
      res.send(err);
    } else {
      res.json(event);
    }
  });
};

exports.list_all_comments = function(req, res) {
  Event.getCommentsByEvent(req.params.id, function(err, event) {
    if (err) {
      res.send(err);
    } else {
      res.json(event);
    }
  });
};