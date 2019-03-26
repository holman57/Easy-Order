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
}).listen(1337, '127.0.0.1');
console.log('Server running at http://127.0.0.1:1337/');