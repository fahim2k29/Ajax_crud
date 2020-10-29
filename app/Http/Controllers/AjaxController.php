<?php

namespace App\Http\Controllers;

use App\Ajax;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function ajaxget()
    {
         $data = json_decode(Ajax::get());
         return $data;

    }

    public function ajaxPost(Request $request)
    {
       $name = $request->input('name');
       $roll = $request->input('roll');

       Ajax::insert([
           'name'=>$name,
           'roll'=>$roll,
       ]);

       return 'Insert Success';
    }
}
