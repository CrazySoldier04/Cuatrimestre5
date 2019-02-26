var five = require("johnny-five");
var board = new five.Board();

board.on("ready", function()
{
    var lcd = new five.LCD({pins:[12,11,7,6,5,4]});
    lcd.cursor(0,0).print("chinguen a su");
    lcd.cursor(1,0).print("madre todos >:V");
});