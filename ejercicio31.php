<?php
$txtNombre = "";

if($_POST) {
  $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : '';
  $txtLenguaje = (isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "";

  print_r($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php if ($_POST) { ?>
    <strong>Hola </strong>: <?php echo $txtNombre; ?>
    <strong>Tu lenguaje es: </strong> <?php echo $txtLenguaje?>
    <?php }?>



  <form action="ejercicio31.php" method="post">
    <input type="text" value="<?php echo $txtNombre; ?>" name="txtNombre" id="">
    <!--This way, value will still in the input-->
    <br />

    Te gustó?
    <br/>

    <br/>php: <input type="radio" <?php echo ($txtLenguaje === 'php') ? 'checked' : '';?> name="lenguaje" value="php" id="">
    <br/>html: <input type="radio" <?php echo ($txtLenguaje === 'html') ? 'checked' : '';?> name="lenguaje" value="html" id="">
    <br/>css: <input type="radio" <?php echo ($txtLenguaje === 'css') ? 'checked' : '';?> name="lenguaje" value="css" id="">
    <!--This way, checked option will still in the radio button-->


    <button>Enviar</button>
  </form>
</body>
</html>