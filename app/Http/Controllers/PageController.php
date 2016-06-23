<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    //
    public function about(){
    	$name = 'Fizz';
    	$members = [
    		'Fake', 'Corona', 'Hawk'
    	];
    	//return view('page.about')-> with('author', $name);
    	return view('page.about', compact( 'name', 'members'));
    }

    public function contact(){
    	return view('page.contact');
    }
}
