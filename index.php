<!DOCTYPE html>
<html>
<head>
    <title>CHAMAR DIRETO NO WHATSAPP</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="flexbox">
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
     <div class="flexbox-title">Whatsapp Direct: </div>
      <div class="welcome">Inicie uma conversa sem precisar salvar o número:</div><br>
    <select name="nome4">
        <option value="Ola">Selecione:</option>
        <option value="Bom%20dia">Bom dia</option>
        <option value="Boa%20tarde">Boa tarde</option>
        <option value="Boa%20noite">Boa noite</option>
        </select>   
  Whats com DDD:<input type="text" name="fname">
  <input type="submit">
</form>
</div>
<?php
$whatsapp[0] = ['x1'=>'https://api.whatsapp.com/send?phone=55'];
/*$bomdia = $_POST['nome4'];*/
$x1 = 'https://api.whatsapp.com/send?phone=55';
$x2 = '&text=';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    $msn =  $_POST['nome4'];
    if (empty($name)) {
        echo '<div id="flexbox-error">Insira um numero</div>';
    } else {
        
        echo '<div id="flexbox-txt2"><a href="'.$whatsapp[0]['x1'].$name.$x2.$msn.'">ABRIR CONVERSA</a>'. '<br><br></div>';                       

    }
}
?>
<div class="footer">
Copyright GERALDO TECH - 2021
</div>
</body>
</html>