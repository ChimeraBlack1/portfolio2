var express = require('express');
var php = require('express-php');
var app = express();
 
app.use(php.cgi('./public'));
app.use(express.static('./public'));
 
app.listen(8080);