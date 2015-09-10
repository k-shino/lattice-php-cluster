<?php

echo "<div class=\"balloon\"><br/>";
echo "IP(VM) = ";
echo $_ENV["SERVER_ADDR"];
echo "<br/>";
echo "IP(Container) =";
echo $_SERVER["CF_INSTANCE_IP"];
echo "</div>"
echo "<img src=\"logo.png\" width=\"400px\" />";

phpinfo(INFO_VARIABLES);

?>
