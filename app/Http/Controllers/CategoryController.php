<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{




    public function new()
    {
        return view('new');
    }


    public function cart(Request $request)
    {
        // dd($request->all());


        $category = new Category();
        $category->name = $request->name;
        $category->save();


        return back();
    }

}
