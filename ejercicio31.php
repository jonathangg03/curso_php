<?php
$txtNombre = "";
$txtLenguaje = "";

$chkphp = '';
$chkhtml = '';
$chkcss = '';

if($_POST) {
  $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : '';
  $txtLenguaje = (isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "";
  

  $chkphp = (isset($_POST['chkphp'])=='Si') ? "checked" : "";
  $chkhtml = (isset($_POST['chkhtml'])=='Si') ? "checked" : "";
  $chkcss = (isset($_POST['chkcss'])=='Si') ? "checked" : "";

  $lsAnime = (isset($_POST["lsanime"])) ? $_POST["lsanime"] : "";

  print_r($lsAnime);
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
    <?php }?><br/>

    <p>Estas aprendiendo: </p><br />
    <?php echo($chkphp == 'checked') ? 'PHP' : ''; ?><br />
    <?php echo($chkhtml == 'checked') ? 'HTML' : ''; ?><br />
    <?php echo($chkcss == 'checked') ? 'CSS' : ''; ?><br />



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

    Estas aprendiendo...

    <br/>php:<input type="checkbox" name="chkphp"  <?php echo $chkphp ?> value="Si" id="">
    <br/>html:<input type="checkbox" name="chkhtml" <?php echo $chkhtml ?> value="Si" id="">
    <br/>css:<input type="checkbox" name="chkcss" <?php echo $chkcss ?> value="Si" id="">
    <br />

    <select name="lsanime" id="" >
      <option value="">[Ninguna serie]</option>
      <option value="naruto" <?php echo ($lsAnime == "naruto") ? "selected" : "" ?> >Naruto</option>
      <option value="bleach" <?php echo ($lsAnime == "bleach") ? "selected" : "" ?> >Bleach</option>
      <option value="dragon" <?php echo ($lsAnime == "dragon") ? "selected" : "" ?> >Dragon Ball</option>
    </select>

    <button>Enviar</button>
  </form>
</body>
</html>