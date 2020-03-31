<html>
<head>
<title> Pagina principal </title>
</head>
<body>
<?php
	echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'>";
?>

 <input type="radio" name="option" value="create_user">Crear usuario<br>
 <input type="radio" name="option" value="list_user">Listar usuarios<br>
 <input type="radio" name="option" value="create_group">Crear grupo<br>
 <input type="radio" name="option" value="list_group">Listar grupos<br><br>
  <input type="submit" name='submit'>

</form>
</body>
</html>