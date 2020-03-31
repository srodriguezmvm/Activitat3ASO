<html>
<head></head>
<body>
<?php
    echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'>";
?>
<form action="controller_create_group.php" method= "POST">

    <p>Nombre del grupo quieras crear: <input type="text" name="group" size="40"></p>

    <input type="submit" name="create" value="Enviar">
    <input type="submit" name="principal" value="Volver">

</form>
</body>
</html>
