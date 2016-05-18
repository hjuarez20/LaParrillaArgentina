<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calendario</title>
</head>
<body>
   
    <!-- CODIGO DE RESERVACIONES -->
<div class="containerReserve">
     <h3>Reservaciones</h3>
     <p>
         En la parrilla Argentina puede realizar sus reservaciones para esa fecha especial.
     </p>
     <p>
         Le ofrecemos el mejor servicio.
     </p>
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Reservar</button>

</div>
<div class="containerLeftReserve">
    <div class="reserveLeft">
        <h3>Nombre</h3>
     <input class="input" type="text" size="15" maxlength="30"  placeholder="nombre" name="nombre" >
        <h3>Hora</h3>
        <form  name=myform>
        <select name=mytextarea>
        <option name=uno value= one disabled>Hora</option>
        <option name=dos value=two> 3:00 pm</option>
        <option name=tres value=three> 4:00 pm </option>
        <option name=tres value=three> 6:00 pm </option>
        <option name=tres value=three> 8:00 pm </option>
        </select>
        </form>
        <h3>Correo</h3>
     <input class="input" type="text" size="15" maxlength="30"  placeholder="ejemplo@gmail.com" name="correo" >
    </div>
</div>
<div class="containerRightReserve">
   <div class="reserveRight">
    <!-- FORM for calendar  -->
       <form>
          <h3>Fecha de Reservacion</h3> <input id="calendar"type="text" placeholder="fecha de reservacion" name="fecha" class="campofecha" size="12">
       </form>
       <!-- FORM for calendar -->
       <h3>Personas</h3>
        <form name=myform>
        <select name=mytextarea>
        <option name=uno value=one disabled>Cantidad de Personas</option>
        <option name=dos value=two> 2 person </option>
        <option name=tres value=three> 4 person </option>
        <option name=tres value=three> 8 person </option>
        </select>
        </form>
        <h3>Telefono</h3>
        <input class="input" type="text" size="15" maxlength="30"  placeholder="teléfono" name="telefono" >
        </div>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- CODIGO DE RESERVACIONES -->

<!-- SCRIPT DE RESERVACIONES -->	
 <!--<script type="text/javascript">
   $(document).ready(function(){
      $(".campofecha").calendarioDW();
   })
   </script> -->
<!-- SCRIPT DE RESERVACIONES -->
</body>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-77610408-2', 'auto');
  ga('send', 'pageview');
 
</script>
</html>