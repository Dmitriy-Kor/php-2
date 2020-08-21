<?php

namespace Classes;

class Application {

	private $view;

	public function __construct(View $view) {
		$this->view = $view;
	}

	public function example1() {
		$name 		= "ALEXANDER"; //$_POST["name"];
		$username 	= "ckent"; //$_POST["username"];
		$password 	= "password"; //$_POST["password"];

		$this->view->render("index", array(
			'name' 		=> $name,
			'username' 	=> $username,
			'password' 	=> $password
		));
	}

	public function example2() {

		$num = rand (0,30);
		$div = ($num % 2);

		$this->view->render("numbers", array(
			'num' => $num,
			'div' => $div
		));		

	}	

	public function example3() {

		$items = [
			"book"=>"a",
			"car"=>"b"
		];

		$this->view->render("list", array(
			'items' => $items
		));		

	}	

}