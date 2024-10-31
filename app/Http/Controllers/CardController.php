<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\User;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function admin()
    {
        if (\Auth::user()->is_admin) {
            $cards = Card::all();
            $users = User::all();
            return view('admin', compact('cards'), compact('users'));
        } else {
            return view('auth.login');
        }
    }

    function dashboard(){
        $cards = Card::where('user_id', \Auth::user()->id)->get();
        $total = $cards->count();

        return view('dashboard', compact('cards'), ['total' => $total]);
    }

    public function index()
    {

        $cards = Card::where('is_visible', true)->get();

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
        $card->user_id = auth()->user()->id;

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
        return view('cards.edit', compact('card'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Card $card)
    {
        //
        $card = Card::find($card->id);

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

        $card->save();
        return redirect('/');
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

    public function visible(Card $card)
    {
        $card = Card::find($card->id);
        if($card->is_visible){
            $card->is_visible = false;
        }else {
            $card->is_visible = true;
        }

        $card->save();
        return redirect('/dashboard');
    }
}
