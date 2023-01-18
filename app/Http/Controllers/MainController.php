<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Movies;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $data = [
            'data' => Movies::all(),
            'banner' => Banner::all()
        ];
        return view('index',$data);
    }

    public function overview(Request $request)
    {
        $request->slug;
        $movies =  Movies::where('slug',$request->slug)->first();
        $related_movies = Movies::where('genres', $movies->genres)->get();
        $data = [
            'data' => $movies,
            'related_movie' => $related_movies
        ];
        return view('overview',$data);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Movies $movies)
    {
        //
    }

    public function edit(Movies $movies)
    {
        //
    }


    public function update(Request $request, Movies $movies)
    {
        //
    }


    public function destroy(Movies $movies)
    {
        //
    }
}

