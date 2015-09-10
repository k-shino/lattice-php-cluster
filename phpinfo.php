<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
	<div id="wrapper">

<?php

echo "<div class=\"balloon\"><br/>";
echo "IP(VM) = ";
echo $_ENV["CF_INSTANCE_IP"];
echo "<br/>";
echo "IP(Container) =";
echo $_SERVER["SERVER_ADDR"];
echo "</div>";
echo "<br/>";
echo "<img src=\"logo.png\" width=\"400px\" />";

phpinfo(INFO_VARIABLES);

?>
	</div>
</body>
</html>
