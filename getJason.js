

var express = require('express'), 
		app = express();

var http = require('http');
var MongoClient = require('mongodb').MongoClient;
var url = "mongodb://localhost:27017/";

var temp = "";
    MongoClient.connect(url, function(err, db) {
 //     if (err) throw err;
      var dbo = db.db("MENU");
      var query = { name: "Flatbread Pizza" };
      dbo.collection("ITEMS").find(query).toArray(function(err, result) {
 //       if (err) throw err;
        temp = result.toString();
//        console.log(result);
        db.close();
      });
    });

var app = http.createServer(function(req,res){
    res.setHeader('Content-Type', 'text');
    res.end(temp);
});

app.listen(3000);
console.log("run on 3000");
