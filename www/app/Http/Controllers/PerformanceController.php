<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Performance;
use Illuminate\Http\Request;

class PerformanceController extends Controller
{
    public function index()
    {
        $performances = Performance::all();
        return view('performance.index', compact('performances'));
    }

    public function create()
    {
        $genres = Genre::all();
        return view('performance.create', compact('genres'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'age' => 'required',
            'price' => 'required',
            'genre_id' => 'required',
        ]);

       $performance = Performance::query()->create([
            'name' => $request->name,
            'date' => $request->date,
            'genre_id' => $request->genre,
            'age' => $request->age,
            'price' => $request->price,
        ]);

       if ($request->file('picture') !== null){
           $performance->picture = $request->file('picture')->store('public/performance');
           $performance->save();
       }

        return redirect('/performance');
    }

    public function destroy(Performance $performance)
    {
        $performance->delete();
        return redirect('/performance');
    }
}
