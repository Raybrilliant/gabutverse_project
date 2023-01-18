<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Banner;
use App\Models\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $session_id = $request->session()->get('active');
        if (!$session_id) {
            return redirect('admin/login');
        }
        $data = [
            'info' => Admin::find($session_id)->first(),
            'data' => Movies::all(),
            'banner' => Banner::all()
    ];
        return view('admin/index',$data);
    }

    public function store(Request $request)
    {
        $data = [
            'movieName' => $request->movieName, 
            'slug' => Str::slug($request->movieName,'-'),
            'count' => 0,
            'originalName' => $request->originalName,
            'movieYear' => $request->movieYear,
            'rating' => $request->rating,
            'popularity' => $request->popularity,
            'genres' => $request->genres,
            'language' => $request->language,
            'overview' => $request->overview,
            'posterPath' => $request->posterPath,
            'backdropPath' => $request->backdropPath,
            'trailer' => $request->trailer,
            'watchLink' => $request->watchLink,

        ];
        Movies::create($data);
        return redirect('admin')->with('error','Movie Added Successfully');
    }

    public function storeToken(Request $request)
    {
        $data = Admin::where('name',$request->name)->first();
        $data->tokenApi = $request->token;
        $data->save();
    }

    public function storeViews(Request $request)
    {
        $data = Movies::where('movieName',$request->name)->first();
        $data->count = $request->views;
        $data->save();
    }

    public function storeBanner(Request $request)
    {
        $data = $request->id;
        $data = Movies::find($data);
        $data = [
            'movieName' => $data->movieName,
            'backdropPath' => $data->backdropPath,
            'slug' => $data->slug
        ];
        Banner::create($data);
        return redirect('admin')->with('error','Movie Banner Added Successfully');
    }

    public function deleteMovie(Request $request)
    {
        Movies::destroy($request->id);
        return redirect('admin')->with('error','Movie Deleted Successfully');
    }


    public function deleteBanner(Request $request)
    {
        Banner::destroy($request->id);
        return redirect('admin')->with('error','Banner Deleted Successfully');
    }


    public function destroy(Movies $movies)
    {
        //
    }
}

