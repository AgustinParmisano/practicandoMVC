<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title id="pageTitle">Welcome to the real World</title>
  </head>
  <body>
    <form id="mesa_form" action="mesa.php" method="get">
      <fieldset>
         <legend>Mesa de Entrada:</legend>
      <label for="expediente">Expediente:</label>
      <input type="text" name="expediente" id="expediente" value="" tabindex="1" required><br>
      <label for="causante">Causante:</label> 
      <input type="causante" name="causante" id="causante" value="" tabindex="2" required><br>
      <label for="extracto">Extracto:</label> 
      <input type="extracto" name="extracto" id="extracto" value="" tabindex="3" required><br>
      <label for="persona">Persona:</label> 
      <input type="persona" name="persona" id="persona" value="" tabindex="4" required><br>
      <label for="keyword">Keyword:</label> 
      <input type="keyword" name="keyword" id="keyword" value="" tabindex="5" required><br>
      <input type="submit" value="Buscar" id="submit" tabindex="4">
      </fieldset>
    </form>   
  </body>
</html>