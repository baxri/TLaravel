<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class NotesController extends Controller
{
    public function store( Request $request, Card $card ){

        $note = new Note([
            'body' => $request->body
        ]);

        $note->by(Auth::user());

        $card->addNote( $note );

        return $card->notes;
    }
}
