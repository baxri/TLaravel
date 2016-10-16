<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class CardsController extends Controller
{
    public function index(){
    	$cards = Card::all();
    	return $cards;
    }

    public function show( Card $card ){
    	$card = Card::find($card);
    	return $card;
    }
}
