<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\PorjectModel;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $project = DB::table('projects')->get();
        return view('home', compact('project'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $project = DB::table('projects')->get();
        return view('home', compact('project'));
    }
    public function invest(){
        return view('invest');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function investdetails($id){
      
        $project=PorjectModel::find($id);
        return view('investdetails',compact('project'));
    }
}
