var five = require("johnny-five");
var board = new five.Board();

board.on("ready", function(){

    var lcd = new five.LCD({pins:[12,11,7,6,5,4]});
    lcd.cursor(0,0).print("HOLA");
    lcd.cursor(1,0).print("Hola putitas");
});