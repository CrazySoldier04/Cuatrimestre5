var http = require('http');
var querystring = require('querystring');
var mensajes = require('./messages.js');
var mensajes_lista = new Array();
http.createServer(function(peticion, respuesta)
{
   if(peticion.method == 'POST')
   {
      var data_post = '';
      peticion.on('data', function(data_cortada)
      {
         data_post += data_cortada;
      });
      peticion.on('end', function()
      {
         var data_post_objeto = querystring.parse(data_post);
         mensajes_lista.push({nombre: data_post_objeto.nombre, mensaje: data_post_objeto.mensaje});
         respuesta.writeHead(200, {'Content-Type': 'text/html'});
         respuesta.end(mensajes.dibujarCodigoHtml(mensajes_lista));
      });
   }
   else
   {
      respuesta.writeHead(200, {'Content-Type': 'text/html'});
      respuesta.end(mensajes.dibujarCodigoHtml(mensajes_lista));
   }
}).listen(3000, '127.0.0.1');
console.log('Servidor funcionando.');