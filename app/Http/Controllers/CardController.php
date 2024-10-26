<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cards = Card::all();

        return view('cards.index', compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cards.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //get all inputs
    //save in record
        $card = new Card;

        $card->name = $request->input('name');
        $card->description = $request->input('description');
        $card->type = $request->input('type');
        $card->color_id = $request->input('color');
        $card->power = $request->input('power');
        $card->toughness = $request->input('toughness');
        $card->blue = $request->input('blue');
        $card->black = $request->input('black');
        $card->green = $request->input('green');
        $card->red = $request->input('red');
        $card->white = $request->input('white');
        $card->colorless = $request->input('colorless');
        $card->generic = $request->input('generic');

//        $card->name = 'test';
//        $card->description = 'test';
//        $card->type = 'test';
//        $card->color_id = 1;
//        $card->power = 1;
//        $card->toughness = 1;
//        $card->blue = 1;
//        $card->black = 1;
//        $card->green = 1;
//        $card->red = 1;
//        $card->white = 1;
//        $card->colorless = 1;
//        $card->generic = 1;

        $card->save();
        return redirect('/');


    }

    /**
     * Display the specified resource.
     */
    public function show(Card $card)
    {
        //
        return view('cards.show', compact('card'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Card $card)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Card $card)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Card $card)
    {
        //
        $card->delete();
        return redirect('/');
    }
}
