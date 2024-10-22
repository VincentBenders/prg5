<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use function Pest\Laravel\get;

class HomeController extends Controller
{
    function index()
    {
//        $cards = Card::all();
//
//        return view('home', compact('cards'));
        return redirect(route('cards.index'));
    }

//    function show($id)
//    {

//    if (\Auth::user()->is_admin) {}
//        $card = Card::find$id);
//        return view('home' , compact('card'));
//    }
    //whoops
    /*
        $card = new Card();
        $card->name = 'Captain nGathrod';
        $card->blue = 1;
        $card->black = 1;
        $card->generic = 3;
    */
}
