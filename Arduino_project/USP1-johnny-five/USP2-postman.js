var express = require('express');
var app = express();
const axios = require('axios');
var path = require('path');
 
app.get('/prueba.html', function (req, res)
{
  res.sendfile(path.join('./prueba.html'));
  //let body = document.getElementById('txtAlexis').innerHTML;
  //res.send(body);
})

/*app.listen(3000, function()
{
    console.log('Server is running');
});
axios.get('http://localhost:3000/prueba.html')
.then(function (respuesta)
{
  console.log(respuesta.data);
})
.catch((er) => {console.log(er);});*/