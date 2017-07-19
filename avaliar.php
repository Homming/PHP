<?php
require("nav/header.php");
?>

<?php
require("nav/menu.php");
?>	

		<h1 style="text-align:center"> Avaliações dos Usuarios </h1>
		<br><br><br><br><br><br><br><br>
		<div class="geral" align="center">
			<div>
			<b>Usuario: </b> Anônimo<br>
			<b>Nota: </b>10<br>
			<p>AMEIII ESSE LIVRO, ELE É LINDO E MAGICO KKKK AMEI</p>
			</div>
		</div>
		
		<br>
		
		<div class="geral">
			<div>
			<b>Usuario: </b> Pedro Catarino<br>
			<b>Nota: </b>3<br>
			<p>Achei o livro muito extenso, prefiro ler Senhor dos Aneis</p>
			</div>
		</div>
		
		<br>
		
		
		<div class="geral">
			<div>
			<b>Usuario: </b> XANDÃO100%GOSTOSO<br>
			<b>Nota: </b>9<br>
			<p>caramba cara, meu personagem favorito é o Jon Snow, que homão da porra</p>
			</div>
		</div>
		
		<br><br>
		
		<div class="geral">
			<form>
			<b>Nota</b>
			<br>
			1  <input type="radio" name="nota" value="nota">&nbsp; &nbsp; &nbsp;
			2 <input type="radio" name="nota" value="nota">&nbsp; &nbsp; &nbsp;
			3 <input type="radio" name="nota" value="nota">&nbsp; &nbsp; &nbsp;
			4 <input type="radio" name="nota" value="nota">&nbsp; &nbsp; &nbsp;
			5 <input type="radio" name="nota" value="nota">&nbsp; &nbsp; &nbsp;
			6 <input type="radio" name="nota" value="nota">&nbsp; &nbsp; &nbsp;
			7 <input type="radio" name="nota" value="nota">&nbsp; &nbsp; &nbsp;
			8 <input type="radio" name="nota" value="nota">&nbsp; &nbsp; &nbsp;
			9 <input type="radio" name="nota" value="nota">&nbsp; &nbsp; &nbsp;
			10 <input type="radio" name="nota" value="nota">
			<br>
			<br>
			</form>
			
			<form action="comentarios.php" method="get">
			
			<div>
			<input type="text" placeholder="usuario" name="uname"><br><br>
			<textarea name=minhaareatexto cols=120 rows=10>
		
			</textarea>
			<input type="submit" value="Enviar"> <input type="reset" value="Limpar">
			</div>
			</form>
		</div >
	</body>
</html>
