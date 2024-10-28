<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\User;
use Illuminate\Http\Request;
use function Pest\Laravel\get;

class HomeController extends Controller
{
    function index()
    {
        $cards = Card::all();

        return view('cards.index', compact('cards'));
//        return redirect(route('cards.index'));
    }
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
}
