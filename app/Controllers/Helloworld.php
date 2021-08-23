<?php

namespace App\Controllers;

class Helloworld extends BaseController{

    public function index(){
		
		return view('welcome_message');
    }

#    public function hellopersonalizado(string $nome, int $idade): void{
#        echo "<h1>Hello, $nome que tem $idade anos</h1>";
#    }
}

?>