function dibujarCodigoHtml(mensajes_lista)
{
    var html = '<!DOCTYPE html>';
    html += '<html>';
    html += '<head>';
    html += '<meta charset="UTF-8">';
    html += '<link href="./style.css" type="text/css" rel="stylesheet">';
    html += '</head>';
    html += '<body>';
    html += '<form id="Form1" name="frmPrueba" action="" method="post">';
    html += '<label for="txtNombre" form="Form1">Nombre</label><br>';
    html += '<input id="txtNombre" type="text" name="txtNombre" required><br>';
    html += '<label id="txtNombre1" form="Form1">Nombre</label><br>';
    html += '<input id="txtNombre1" form="Form1" name=txtNombre1" required><br>';
    html += '<input id="btnEnviar" form="Form1" name="btnEnviar" type="submit" value="Enviar">';
    html += '</form>';
    html += mostrarMensajes(mensajes_lista);
    html += '</body>';
    html += '</html>';
    return html;
 }
 function mostrarMensajes(mensajes_lista)
 {
    var html = '<ul>';
    for(var i in mensajes_lista)
    {
       html += '<li>';
       html += '<p> <strong> ' + mensajes_lista[i].nombre + '</strong></p>';
       html += '<p>' + mensajes_lista[i].mensaje + '</p>';
       html += '</li>';
    }
    html += '</ul>';
    return html;
 }
 exports.dibujarCodigoHtml = dibujarCodigoHtml;