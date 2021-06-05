<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function test()
    {
        $path = 'E:\folders\test2\test4';
        $name = 'bg11';
        $newName = 'Renamed';
        $ext = 'png';
        // $folder_path = Storage::disk('custom_folder')->file_exists($path.'/'.$name);
        if(file_exists($path.'/'.$name.'.'.$ext)){
            $rename = rename($path.'/'.$name.'.'.$ext, $path.'/'.$newName.'.'.$ext);
        }
        // dd($rename);
    }
}