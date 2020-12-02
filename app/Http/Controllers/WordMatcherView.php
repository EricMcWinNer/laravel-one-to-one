<?php

namespace App\Http\Controllers;

use App\Models\Match;
use App\Models\Word;
use Illuminate\Http\Request;

class WordMatcherView extends Controller
{
    public function index()
    {
        $words = Word::orderBy('value', 'asc')->get();
        $matches = Match::orderBy('value', 'asc')->get();
        return view('wordmatch', compact('words', 'matches'));
    }
}
