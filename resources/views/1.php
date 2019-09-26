<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>menu</title> 
<style type="text/css">
* { padding: 0; margin: auto; text-align: center  }
h1 { font: bold 1.5em arial; padding: 0.5em; }

#navbar { background-color: grey; }

#navbar li { margin: 0px 5px; padding: 0.1em 1em 0.5em 1em; 
           background-color: black; width: 12%;float: left;
           list-style-type: none; position: relative; }
#subseccion1, #subseccion2, #subseccion3, #subseccion4 , #subseccion5 , #subseccion6,#subseccion7,
             { position: absolute; top: 100%; left: 0px;  
             background-color:grey; font:normal 0.8em arial;  
            display: none; }	

#navbar li:hover { background-color:grey; }
#navbar li a:link, #navegador li a:visited { 
           color: #feffe4; text-decoration: none; }
#navbar li a:hover,
#navbar li a:active { 
           color:grey ; text-decoration: none; }
</style>
<script type="text/javascript">
function ver(n) {
         document.getElementById("subseccion"+n).style.display="block"
         }
function ocultar(n) {
         document.getElementById("subseccion"+n).style.display="none"
         }
</script>
</head>
<body>
<div id="cabecera">
  <h1>MENU</h1>
</div>
<div id="navbar">
  <ul>

    <li id="seccion1" onmouseover="ver(1)" onmouseout="ocultar(1)">
      <a href="#">Origen</a>
      <div id="subseccion1">
      </div>
    </li>

    <li id="seccion2"  onmouseover="ver(2)" onmouseout="ocultar(2)">
      <a href="#">Asesoria</a>
      <div id="subseccion2">
        <p><a href="#">Asesoris Contable</a></p>
        <p><a href="#">Asesoria Fiscal</a></p>
        <p><a href="#"> Auditoria</a></p>
      </div>			
    </li>

    <li id="seccion3" onmouseover="ver(3)" onmouseout="ocultar(3)">
    <a href="#">Laboral</a>
      <div id="subseccion3">
      </div>	
    </li>

    <li id="seccion4" onmouseover="ver(4)" onmouseout="ocultar(4)">
    <a href="#">Servicios Legales</a> 
      <div id="subseccion4">
      </div>
    </li>

      <li id="seccion5" onmouseover="ver(5)" onmouseout="ocultar(5)">
    <a href="#">Juridico Contencioso</a> 
      <div id="subseccion4">
      </div>
    </li>

      <li id="seccion6" onmouseover="ver(6)" onmouseout="ocultar(6)">
    <a href="#">Comercio Exterior</a> 
      <div id="subseccion6">
      </div>
    </li>

      <li id="seccion7" onmouseover="ver(7)" onmouseout="ocultar(7)">
    <a href="#">Servicios</a> 
      <div id="subseccion7">
      </div>
    </li>
  </ul>
</div>
</body>
</html>
