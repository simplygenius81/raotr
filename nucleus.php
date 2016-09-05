<?php
require 'core/main.php';
$uri=$_SERVER['REQUEST_URI'];
echo "welcome to the nucleus";
echo "<br/>";
echo $uri;

preformat(params());
load_ctrl('default_ctrl');
$ctrl1=new default_ctrl;





?>