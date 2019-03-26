
	const express = require('express'), 
	app = express();

	var MongoClient = require('mongodb').MongoClient;
	var url = "mongodb://localhost:27017/";

	var out, n, i = 1;


	MongoClient.connect(url, function(err, db) {
	    if (err) throw err;
	    var dbo = db.db("MENU");
	    var query = { name: "Flatbread Pizza" };
	    dbo.collection("ITEMS").find(query).toArray(function(err, result) {
	        if (err) throw err;
	        out = result;
	        console.log(result);
	        db.close();
	    });

		let coll = dbo.collection('ITEMS');
		coll.count().then((count) => {
			n = count;
		    console.log("ITEMS count: " + count);
		});

	});

	function getItem(request, response, next) {
	  	console.log("getItem Loaded");
	  	console.log(out);
	  	next();

	  	MongoClient.connect(url, function(err, db) {
		    if (err) throw err;
		    var dbo = db.db("MENU");
		    var query = { position: i };
		    dbo.collection("ITEMS").find(query).toArray(function(err, result) {
		        if (err) throw err;
		        out = result;
		        console.log(result);
		        db.close();
		    });

	    i++;

		});
	}


	app.get('/getItem', getItem, (request, response)=>{
	  	response.send(out);
	});
	app.listen(4000,()=>console.log('Get Item server at port 4000'));


	function getCount(request,response,next){
	  	console.log("getCount Loaded");
	  	console.log(n);
	  	next();
	}

	app.get('/getCount', getCount, (request, response)=>{
	  	response.send("{" + n + "}");
	});
	app.listen(3500,()=>console.log('Get Count server at port 3500'));



	var http = require('http'),
	    ajaxResponse = { 'hello': 'world' },
	    htmlContent;

	htmlContent  = "<html><title></title><head>";
	htmlContent += "<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>";
	htmlContent += "<script>$(function() {$.ajax({url:'/ajax',success:function(data){alert('success!');console.log(data);},error:function(data){alert('error!');}});});</script>";
	htmlContent += "</head><body><h1>Hey there</h1>";
	htmlContent +="</body></html>";

	http.createServer(function (req, res) {   
	  if (req.url === '/ajax') {
	    res.writeHead(200, {'Content-Type': 'text/json'});
	    res.end(JSON.stringify(ajaxResponse));
	  } else {
	    res.writeHead(200, {'Content-Type': 'text/html'});
	    res.end(htmlContent);  
	  }  
	}).listen(5000);
	console.log('Ajax JQuery server running at 5000');




	app.use(express.static('./public'))
	    .get('*', function (req, res) {
			res.sendfile('public/index.html');
		})
		.listen(3000);
	console.log("Listen on Port 3000");

