<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;



  
}



</style>




</head>
<body>

<h2>Tabs</h2>
<p>Click on the buttons inside the tabbed menu:</p>

<div class="tab">
  <button class="tablinks" onclick="opentab(event, 'tipo')">1. Tipo de declación</button>
  <button class="tablinks" onclick="opentab(event, 'ietacion')">2. Importador/Exportador</button>
  <button class="tablinks" onclick="opentab(event, 'lugares')">3. Lugares</button>
  <button class="tablinks" onclick="opentab(event, 'totales')">4. Totales</button>
  <button class="tablinks" onclick="opentab(event, 'transporte')">5. Info. transporte</button>
  <button class="tablinks" onclick="opentab(event, 'facturas')">6. Facturas</button>
  <button class="tablinks" onclick="opentab(event, 'partida')">7. Detall de Partida</button>
  <button class="tablinks" onclick="opentab(event, 'liquidacion')">8. Liquidacion</button>
  <button class="tablinks" onclick="opentab(event, 'otros')">9. Otros Datos</button>

</div>



<form action="generar" method="POST">
  @csrf
  
<div id="tipo" class="tabcontent">
  <h3>Tipo de declación</h3>


      <label>Regimen</label>
      <select class="form-control select" name=regimen1 size=30>
      <option value="ID" selected>ID: Importacion Directa</option> 
      <option>LZ: Cambio de régimen de importación temporal para retorno en el mismo estado a importación definitiva</option> 
      </select>
     


<div class="a">
      <select class="form-control select" name=regimen2>
        <option value="23">23</option>
        <option value="10" selected>10</option>
      </select>
    </div>
    
  <p>Tipo de operación
  <select name="" id="" class="form-control select">
  <option value="929">929</option>
  </select>      
  </p>

  

  
  <p>Clase de declaracion
  <select name="" id="" class="form-control select">
  <option value="10">10</option>
  </select>      
  </p>

  
  
  <p>Naturaleza de la transacción
    <select name="" id="" class="form-control select">
    <option value="01">01</option>
    </select>      
    </p>

    

</div>





<div id="ietacion" class="tabcontent">
  <h3>Importador o Exportador</h3>

   <p>Importador
    <select name="nombre_importador" id="" class="form-control select">
    <option value="86952-5">Farmacias Galeno</option>
    </select>      
    </p>

    <p>Numero de identificacion (NIT):
      <input type="text" name="nit">
    </p>

    <p>Domicilio Fiscal:
      <input type="text" name="domicilio">
    </p>

    <p>Ciudad:
      <input type="text" name="ciudad">
    </p>

    <p>Tipo doc ID:
      <input type="text" name="tipo-doc-id ">
    </p>

    <p>Pais Emisor ID:
      <input type="text" name="pais-emisor-id ">
    </p>


    <p>Telefono/Fax
      <input type="tel" name="tel" >
    </p>

    <p>Email:
      <input type="email" name="email" >
    </p>

    <p>Condicion de comerciante
      <select name="condicion" id="" class="form-control select">
      <option value="minorista">MINORISTA</option>
      </select>      
      </p>


    


    


</div>


<div id="lugares" class="tabcontent">
  <h3>Lugares</h3>

</div>

<div id="London" class="tabcontent">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>

<div id="London" class="tabcontent">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>


<div id="London" class="tabcontent">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>


<div id="London" class="tabcontent">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>

<div id="London" class="tabcontent">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>
<button type="submit">Generar poliza</button>
</form>

<script>
function opentab(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
 
<script>
  $('.select').select2();
</script>

</body>
</html> 
