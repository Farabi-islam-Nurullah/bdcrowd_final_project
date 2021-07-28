<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Admin;
use DB;
use App\Faq;
use App\PorjectModel;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function home(){
        return view('admin.home');
    }
    public function projects(){
        return view('admin.projects');
    }
    public function basic(){
        return view('admin.projectbasic');
    }
    public function overview(){
        
        $overview_data = DB::table('projects')->get();
        return view('admin.projectoverview', compact('overview_data'));
    }
    public function details(){
        return view('admin.projectdetails');
    }

    // ---------------- FAQ ----------------
    public function faq(){
        $project = DB::table('projects')->get();
        return view('admin.projectfaq', compact('project'));
    }
    public function faqtable($id){
        $project_id =PorjectModel::find($id);
        $faq= Faq::where('project_id', $id)->get();
        return view('admin.faqtable', compact('faq','project_id'));
    }

    public function faqAdd(Request $req){
        $id= $req->input('id');
        $que= $req->input('que');
        $ans= $req->input('ans');
        $result= Faq::insert(['project_id'=>$id,'question'=>$que,'answare'=>$ans]);
   
        if($result==true){      
          return 1;
        }
        else{
         return 0;
        }
   }
   
   
   
   

    public function location(){
        return view('admin.projectmap');
    }
    public function update(){
        return view('admin.projectupdate');
    }
   
}
