<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/script.js"></script>
</head>
  <body>
    <div class="container">
      <div class="table-wrapper">
        <div class="row">
          <table border="0" id="TABLE1">
            <tbody>
              <!-- Titulo -->
              <tr>
                <td colspan="3" class="tabla_titulo_centro">Busqueda Libre de Leyes</td>
              </tr>
              <!-- Instrucciones -->
              <tr>
                <td width="100%" colspan="3" class="tabla_indicaciones" align="middle">
                  "Indique los siguiente datos, si no esta seguro, solo seleccione
                  las que sabe"
                </td>
              </tr>

              <!-- Tipo de Ley -->
              <tr>
                <td class="tabla_texto3" colspan="1" width="50%">
                  <nobr>
                    "Del Siguiente "
                    <u>t</u>
                    "ipo de norma :"
                  </nobr>
                </td>

                <td class="tabla_texto2">
                  <select class="" name="" title="">
                    <option selected="selected" value="Todos los Tipos">Todos los Tipos</option>
                    <option value="C">Constitucion de la Republica</option>
                    <option value="L">Ley</option>
                    <option value="D">Decreto Ejecutivo</option>
                    <option value="R">Reglamento</option>
                    <option value="A">Acuerdo</option>
                  </select>
                </td>
              </tr>
              <!-- Reformas o Version Original -->
              <tr>
                <td class="tabla_texto3" align="right" style="BORDER-RIGHT:0px;" colspan="1"
                width="20%">
                    <nobr>
                      <u>B</u>
                      "uscar en :"
                    </nobr>
                  </td>
                  <tr>
                    <td class="tabla_texto2" align="left" colspan="1" width="70%">
                      <select class="" name="" title="Indique si es Reforma o la Version Original">
                        <option selected="selected" value="R">Reformas</option>
                        <option value="V">Version Original</option>
                      </select>
                    </td>
                  </tr>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
