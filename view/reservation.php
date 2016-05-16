<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calendario</title>
</head>
<body>
   
    <!-- CODIGO DE RESERVACIONES -->
<div class="containerReserve">
     <h2>Reservaciones</h2>
     <p>
         En la parrilla Argentina puede realizar sus reservaciones para esa fecha especial.
     </p>
     <p>
         Le ofrecemos el mejor servicio.
     </p>
</div>
<div class="containerLeftReserve">
    <div class="reserveLeft">
        <h2>Nombre</h2>
     <input class="input" type="text" size="15" maxlength="30"  placeholder="nombre" name="nombre" >
        <h2>Hora</h2>
        <form  name=myform>
        <select name=mytextarea>
        <option name=uno value= one disabled>Hora</option>
        <option name=dos value=two> 3:00 pm</option>
        <option name=tres value=three> 4:00 pm </option>
        <option name=tres value=three> 6:00 pm </option>
        <option name=tres value=three> 8:00 pm </option>
        </select>
        </form>
        <h2>Correo</h2>
     <input class="input" type="text" size="15" maxlength="30"  placeholder="ejemplo@gmail.com" name="correo" >
    </div>
</div>
<div class="containerRightReserve">
   <div class="reserveRight">
    <!-- FORM for calendar  -->
       <form>
          <h2>Fecha de Reservacion</h2> <input id="calendar"type="text" placeholder="fecha de reservacion" name="fecha" class="campofecha" size="12">
       </form>
       <!-- FORM for calendar -->
       <h2>Personas</h2>
        <form name=myform>
        <select name=mytextarea>
        <option name=uno value=one disabled>Cantidad de Personas</option>
        <option name=dos value=two> 2 person </option>
        <option name=tres value=three> 4 person </option>
        <option name=tres value=three> 8 person </option>
        </select>
        </form>
        <h2>Telefono</h2>
        <input class="input" type="text" size="15" maxlength="30"  placeholder="teléfono" name="telefono" >
        </div>
</div>	
<button id="Reserve-button">Reservar</button>
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