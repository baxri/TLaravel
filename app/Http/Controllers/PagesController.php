<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function people(){

    	$people = ['Giorgi', 'Mari', 'Nita'];

		return view( 'pages.people', compact('people', $people) );
		//return view( 'pages.people')->with('people', $people);

		//return view( 'pages.people')->withPeople($people);

    }

    public function about(){

        $user = Auth::user();

		return view( 'pages.about', compact('user'));
    }
}
