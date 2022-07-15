<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use DB;
use App\models\gallery2;
use Session;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function add1(Request $add1)
    {
      return view('upload');
    }
    function save1(Request $reg)
    {
       
        $a=$reg->input('s2');
        
       
 
       
$d=$reg->file('image')->getClientOriginalName();
        $reg->file('image')->storeAs('public',$d);
    
     $ck=new gallery2;
        $ck->Name=$a;
        $ck->photo=$d;


        $ck->save();
        return view('upload');
    }

    function save(Request $save)
    {
      return view('addimage');
    }
   
    function view(Request $view)
    {

  $data['data']=DB::table('gallery2')->get();
      if(count($data)>0)
      {
        return view('viewgallery',$data);
      }
}
}
