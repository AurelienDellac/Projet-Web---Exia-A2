'user strict';
var sql = require('./db.js');

var Product = function(){
};

Product.getAllProducts = function getAllProducts(result) {
        sql.query(`SELECT products.id, label, description, price, img_src,
                   JSON_OBJECT("id", categories.id, "name", name) AS category, stock 
                   FROM products INNER JOIN categories 
                   ON products.id_category=categories.id`, function (err, res) {
                if(err) {
                    console.log("error: ", err);
                    result(null, err);
                }
                else{
                    res.forEach(element => {
                        element.category = JSON.parse(element.category);
                    });
                    result(null, res);
                }
            });   
};

Product.getProductById = function getProductsById(id, result) {
    sql.query(`SELECT products.id, label, description, price, img_src,
                JSON_OBJECT("id", categories.id, "name", name) AS category, stock
                FROM products INNER JOIN categories 
                ON products.id_category=categories.id
                WHERE products.id = ?`, id, function (err, res) {   
                             
            if(err) {
                console.log("error: ", err);
                result(err, null);
            }
            else{
                res.forEach(element => {
                    element.category = JSON.parse(element.category);
                });
                result(null, res);
            }
        });   
};

Product.getProductsByCategory = function getProductsByCategory(category, result) {
    sql.query(`SELECT products.id, label, description, price, img_src,
               JSON_OBJECT("id", categories.id, "name", name) AS category, stock
               FROM products INNER JOIN categories 
               ON products.id_category=categories.id
               WHERE id_category = ?`, category, function (err, res) {                 
            if(err) {
                console.log("error: ", err);
                result(err, null);
            }
            else{
                res.forEach(element => {
                    element.category = JSON.parse(element.category);
                });
                result(null, res);
            }
        });
};

Product.getBasketByUser = function getBasketByUser(id, result) {
    sql.query(`SELECT orders.id AS id, products.id AS id_product, label, img_src, price, quantity, 
                (quantity * price) AS total, JSON_OBJECT("id", users.id, "name", name, "forename", forename) AS user
               FROM orders
               INNER JOIN products ON products.id=orders.id_product
               INNER JOIN users ON users.id=orders.id_user 
               WHERE id_user = ? AND date IS null`, id, function (err, res) {                 
            if(err) {
                console.log("error: ", err);
                result(err, null);
            }
            else{
                res.forEach(element => {
                    element.user = JSON.parse(element.user);
                });
                result(null, res);
            }
        });
};

Product.getOrder = function getOrder(id, date, result) {
    sql.query(`SELECT orders.id AS id, products.id AS id_product, label, img_src, price, quantity, 
                (quantity * price) AS total, JSON_OBJECT("id", users.id, "name", name, "forename", forename) AS user
               FROM orders
               INNER JOIN products ON products.id=orders.id_product
               INNER JOIN users ON users.id=orders.id_user 
               WHERE id_user = ? AND date = ?`, [id, date], function (err, res) {                 
            if(err) {
                console.log("error: ", err);
                result(err, null);
            }
            else{
                res.forEach(element => {
                    element.user = JSON.parse(element.user);
                });
                result(null, res);
            }
        });
};

module.exports=Product;