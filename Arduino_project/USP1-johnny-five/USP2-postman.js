var express = require('express')
var app = express()
var mierda;
 
app.get('/', function (req, res)
{
  res.send(res);
})
 
app.listen(3000, function()
{
    console.log('Server is running');
    console.log(mierda);
});