function numeroAleatorio(min, max) {
  var num = Math.floor(Math.random() * (max - min));
  return num + min;
}