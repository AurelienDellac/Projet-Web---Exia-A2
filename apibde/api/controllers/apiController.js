'use strict';

var Event = require("../models/Event");

exports.list_all_events = function(req, res) {
  Event.getAllEvent(function(err, data) {
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