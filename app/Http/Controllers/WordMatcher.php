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

        // Gets all words as a collection in the same order they are shown on the page
        $words = Word::orderBy('value', 'asc')->get();
        $total = $words->count();
        $score = 0;
        foreach ($matches as $key => $match) {

            // Loop through the submitted words and use the inverse relationship to check if they are related.
            if (Match::find($match)->word->id === $words[$key]->id)
                $score += 1;


            // The check could also be achieved by using the actual One to One relationship like this:

            // if($words[$key]->match->id == $match)
            //     $score += 1;


            /******************************
             *
             * N.B
             *
             * Using strict equality (===) in the commented if statemen with the actual relationship
             * won't work because $match is a string while -> id returns an integer,
             * and the types are not the same
             *
             *****************************/

        }
        $percent = floor(($score / $total) * 100);
        session()->flash("score_status", "success");
        session()->flash("score_status_title", "Here's your Score");
        session()->flash('score_status_message', "You got $percent% and matched $score out of $total words correctly.");
        return back();
    }
}
