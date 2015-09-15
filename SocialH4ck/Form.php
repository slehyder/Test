<html>
<script type="text/javascript">
function comprobar() {
         var mirarLargo="no";
         var mirarIgual="no";
         var contra1 = document.form1.password
         var contra2 = document.form1.password1
		 var espacios = false;
         var cont = 0;
		 
		 while (espacios && (cont < contra1.value.length)) {
if (contra1.value.charAt(cont) == " ")
espacios = "si";
cont++;
}
 
if (espacios == "si") {
alert ("La contraseña no puede contener espacios en blanco");
return false;
}

         if (contra1.value.length >= 6) {
            mirarLargo = "si"
            }
         else {
		 alert("La contraseña debe tener más de 6 caracteres.");
            
            }
         if (contra1.value == contra2.value) {
            mirarIgual = "si"
            }
         else {
		  alert("La contraseña y su repetición deben ser iguales.");
          
            }
         if (mirarLargo == "no" || mirarIgual == "no") {
            return false
            }
         }

</script>
<head><title>formulario</title></head>
<body>
 
<h3>Formulario</h3>
 
 <form method="post" action="Save.php" name="form1"  class='contacto1' id="form1" onsubmit="return comprobar()">
           
			<table>
			<tbody>
			<tr>
			<td>

			 <div>
			<label>
			<div align="right">Nombre:</div>
			</label> </td><td><input name="nom" type='text' id="nom_clie" value=''  pattern="[a-zA-Z ]{5,}"  size="23" required="required"/></td>
			</tr>
            
			           <tr><td> <label><div align="right">Fecha de nacimiento:</div></label></td> <td><input size="23" name="fecha" type='text' id="fecha" value='' required="required"/>
            </td></tr>
            
			
            <tr><td>
              <label><div align="right">Direccion:</div></label></td> <td>
              <textarea name="dire" rows='6' size="23"  id="dire"></textarea>
            </td></tr>

			<tr><td>&nbsp;</td><td><input type='submit' value='Registrar'/></td></div>
  </form>
 
</body>
</html>