<?php
require("nav/header.php");
?>
<?php
require("nav/menu.php");
?>	

	<br><br><br><br><br>
	<div class="geral">      
 	<form name="autentication" method="post" action="autentication.php">
    <table>
    	
        <td><input type="text" placeholder="Email" name="email"></td></tr>

	    	<td><input type="password" placeholder="senha" name="senha"></td></tr>

    	<tr><td><input type="submit" value="Entrar"></td> <td><input type="button" value="Voltar" onClick="history.go(-1)"></tr></tr>

	
    </table>
    </form>
    <br><br>
    	
</div>        
		
	</body>
</html>