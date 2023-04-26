<?php
class Conexion{
	static public function conectar(){
		$link = new PDO("mysql:host=localhost;dbname=pos_example", "root", "Mysql13091309");
		$link->exec("set names utf8");
		return $link;
	}
}
