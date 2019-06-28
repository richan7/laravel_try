<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecondController extends Controller
{
    public function contents(Request$request)
	{
		$name=$request->input('name');
		$radio=$request->input('radio');
        $checkbox=$request->input('checkbox');
        $date=$request->input('date');
        $comment=$request->input('comment');

        return view('contents',['name'=>$name,'radio'=>$radio,'checkbox'=>$checkbox,'date'=>$date,'comment'=>$comment]);
    }
}