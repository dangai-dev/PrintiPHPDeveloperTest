<?php

/*
* This file is part of Printi PHP Developer Test
* 
* (c) Felipe Lima Alcântara <felipe.lima.alcantara@gmail.com>
*
*/

namespace App\Http\Controllers;
use \Github\Client as GithubClient;

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
    	$client = new GitHubClient();
		$repositories = $client->api('user')->repositories('symfony'); 
    	
    	return view('index', compact('repositories')); 
    }
}
