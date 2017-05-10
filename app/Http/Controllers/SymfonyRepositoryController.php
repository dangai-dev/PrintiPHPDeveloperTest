<?php

/*
* This file is part of Printi PHP Developer Test
* 
* (c) Felipe Lima Alcântara <felipe.lima.alcantara@gmail.com>
*
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
*
* Controll Symfony repository contents data
*
*/
class SymfonyRepositoryController extends Controller
{
    /**
	*@return array
	*/
    public function index(){
    	$client = new \Github\Client(); 
		$repositories = $client->api('user')->repositories('symfony'); 
    	
    	return view('index', compact('repositories')); 
    }
}
