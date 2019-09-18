
<html>
<head>
<title>JQuery - change</title>
<!-- chamada da biblioteca jquery -->
<script type="text/javascript" src="js-css/jquery.js"></script>
 
<script>
$(document).ready(function() {
$('select').change(function() {
   var varURL = $("option:selected", this).val();
   $("#exibeValor").html('O valor selecionado é: ' + varURL);
   });
});
</script>
</head>
<body>
<h2>JQuery - Change</h2>
<form name="frmChange">
   <select style="width:160px">
     <option value="Valor 1">Valor 1</option>
     <option value="Valor 2">Valor 2</option>
     <option value="Valor 3">Valor 3</option>
   </select>
</form>
<br />
<div id="exibeValor"></div>
</body>
</html>