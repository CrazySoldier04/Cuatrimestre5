var express = require('express');
var five = require('johnny-five');
var board = new five.Board();
var app = express();

function Monda()
{
    //var x = document.getElementById('txtPrueba').value;
    //var y = document.getElementById('txtPrueba2').value;
    var x = "Culito";
    var y = "Chichis";
    console.log(x + ', ' + y);
}
board.on("ready", function()
{
  var lcd = new five.LCD({pins:[12,11,7,6,5,4]});
  lcd.cursor(0,0).print(x);
  lcd.cursor(1,0).print(y);
});

app.get('/prueba.html', function (req, res)
{
  res.sendfile(path.join('./prueba.html'));
  //let body = document.getElementById('txtAlexis').innerHTML;
  //res.send(body);
})