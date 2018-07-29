
<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <title>Autenticação</title>
				<link rel="stylesheet" href="../css/layout2.css">
        <link rel="stylesheet" href="css/layout.css">
        <script>


        // funcao que verifica se o que ta digitado e numero
        function verificarNumero(e) {
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
              return false;
            }
        }

        // verificando se o que ta no campo cpf e numero
        $(document).ready(function() {
          $("#cpf").keypress(verificarNumero);
        });

        // Formatacao do campo cpf
        function FormataCpf(evt) {
          vr = (navigator.appName == 'Netscape') ?evt.target.value:evt.srcElement.value;
                if(vr.length == 3)vr = vr+".";
                if(vr.length == 7)vr = vr+".";
                if(vr.length == 11)vr = vr+"-";
          return vr;
        }




         </script>


    </head>
    <body>
        <div id="back">
          <div class="backRight"></div>
          <div class="backLeft"></div>
        </div>

        <div id="slideBox">
          <div class="topLayer">
            <div class="right">
                <div class="containerLogo">
                  <div class="jumbotron">
                    <h1 class="display-4">Autenticacao</h1>
                  </div>
              </div>

              <div class="content">

                <form class="" action="router.php?controller=usuario&modo=login" method="post">
                  <div class="form-groupDir">
                        <input type="text" name="txt_usuario" id="cpf" value="" placeholder="Cpf" maxlength="14" onkeypress="this.value = FormataCpf(event)">
                  </div>
                    <div class="form-group">
                        <input type="password" name="txt_senha" value="" placeholder="Senha">
                  </div>
                    <button type="submit" name="entrar" value="ENTRAR">ENTRAR</button>
                </form>
              </div>
            </div>
          </div>
        </div>
    </body>
</html>
