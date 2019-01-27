var express = require('express'),
  app = express(),
  port = process.env.PORT || 3000;

var routes = require("./api/routes/apiRoutes");
app.use(function(req, res, next) { 
  res.header("Access-Control-Allow-Origin", "*"); 
  res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept"); 
  next(); 
}) 
 
routes(app); 

app.listen(port);

console.log('BDE CESI Bordeaux RESTful API server started on: ' + port);