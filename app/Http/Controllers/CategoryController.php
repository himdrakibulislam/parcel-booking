<?php

namespace App\Http\Controllers;

use Faker\Guesser\Name ;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        $category=Category::paginate(5);
        return view('backend.pages.category.category',compact('category'));
    }

    public function agree()
    {
        return view('backend.pages.category.agree');
    }

    public function store(Request $request)

    {
    //    dd($request->all());
        $request->validate([


            'Name'=>'required',
            'Image'=>'required',
            'Description'=>'required',


         ]);


         Category::create ([

            //datebase colomn name(left) = input field (right)

            'Name'=>$request->Name,
            'Image'=>$request->Image,
            'Description'=>$request->Description,



         ]);

         return redirect()->route('category')->with ('msg, Date store Successfully');


    }


}
