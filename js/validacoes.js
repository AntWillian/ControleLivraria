function PermiteNumeros()
{
  var tecla = window.event.keyCode;
  tecla     = String.fromCharCode(tecla);
  if(!((tecla >= "0") && (tecla <= "9")))
  {
    window.event.keyCode = 0;
  }
}
