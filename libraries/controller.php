<?php

class ctrl {

	static function getctrluri(){
		echo $_SERVER['REQUEST_URI'];
		echo 'controllers class present';
	}
}