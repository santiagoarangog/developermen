//Funcion para limpiar los valores que llegan por get despues de que termine de cargar el body
function limpiarGet(){
  var miUrl = location.href.split("?")[0];
  window.history.pushState('object', document.title, miUrl);
}
