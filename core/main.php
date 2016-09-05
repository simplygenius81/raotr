<?php
require 'config.php';
require 'libraries/controller.php';
require 'libraries/model.php';
require 'libraries/view.php';

$uri=$_SERVER['REQUEST_URI'];


function fstr($data_array){
  global $file_string;
  foreach($data_array as $data){

    //$file_string=$file_string.$data[0];//str_replace($data[0],$data[1],$file_string);
    $file_string=str_replace($data[0],$data[1],$file_string);
  }
  echo $file_string;
  //echo 'fstr';
}

function params(){
  global $uri;
  $pararray=array_values(array_filter(explode('/',$uri)));
  if (!empty($pararray)){
  	return $pararray;
  }
  else
  {
  	echo 'No parameters found';
  }

}

function preformat($toshow){
	echo '<pre>';
	print_r ($toshow);
	echo '</pre>';
}


function load_ctrl($controller){
  require '/apps/main/controllers/'.$controller.'.php';
}
function load_view($view_name){
  require '/apps/main/views/'.$view_name.'.php'; 
}

 ?>
