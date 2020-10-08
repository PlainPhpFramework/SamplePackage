<?php

namespace App\Controller;

class HelloWorld
{
	function index() {
		$name = e(@$_GET['name'])?: 'World';
		require 'templates/helloworld.php';
	}
}