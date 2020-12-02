<?php

namespace App\Http\Controllers;

use App\Models\Match;
use App\Models\Word;
use Illuminate\Http\Request;

class WordMatcher extends Controller
{
    public function submit(Request $request)
    {
        $matches = $request->input('match');
        $words = Word::orderBy('value', 'asc')->get();
        $total = $words->count();
        $score = 0;
        foreach ($matches as $key => $match) {
            if (Match::find($match)->word->id === $words[$key]->id)
                $score += 1;
        }
        $percent = floor(($score / $total) * 100);
        session()->flash("score_status", "success");
        session()->flash("score_status_title", "Here's your Score");
        session()->flash('score_status_message', "You got $percent% and matched $score out of $total words correctly.");
        return back();
    }
}
