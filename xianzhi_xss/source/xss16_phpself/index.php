<html>
<head>
<meta charset=utf-8>
<meta http-equiv="X-UA-Compatible" content="IE=10">
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<img src="xss.png" style="display: none;">
<h1>
<?php
$output=str_replace("<","<",$_SERVER['PHP_SELF']);
$output=str_replace(">",">",$output);
echo $output;
?>
</h1>
</body>
</html>