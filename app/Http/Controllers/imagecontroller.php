<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request;
use Image;

class imagecontroller extends Controller
{
    public function _construct()
    {
    	$this->middleware('auth');
    }
    public function fileupload(Request $request)
    {
    	$this->validate($request,['image=>'requied|image|mimes:jpeg,jpg,png]);
    	$image=$request->file('image');
    	$input['imagename']=time().'.'.$image->getClientOriginalExtension();
    	$destinationPath=public_path('/images');$image=move($destinationPath,$input['imagename']);
    	$this->postImage->add($input);
    	return back()->with('success',);
    }
}
