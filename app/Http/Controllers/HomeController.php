<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $card = Card::find(1);
        return view('home' , compact('card'));
    }
    //whoops
    /*
        $card = new Card();
        $card->name = 'Captain nGathrod';
        $card->blue = 1;
        $card->black = 1;
        $card->generic = 3;
    */
}
