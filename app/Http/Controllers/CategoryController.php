<?php

namespace App\Http\Controllers;

use Faker\Guesser\Name;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        $category = Category::paginate(5);
        return view('backend.pages.category.category', compact('category'));
    }

    public function agree()
    {
        return view('backend.pages.category.agree');
    }

    public function store(Request $request){
        $request->validate([
            'Name' => 'required',
        ]);
        Category::create([
            'Name' => $request->Name,
            'Image' => $request->Image,
            'Description' => $request->Description,
        ]);
        return redirect()->route('category')->with('status',' Date store Successfully');
    }
    public function edit(int $id){
       $category =  Category::findOrFail($id);
        return view('backend.pages.category.edit',compact('category'));
    }
    public function update(Request $request,int $id){
        $request->validate([
            'Name' => 'required',
        ]);
        Category::whereId($id)->update([
            'Name' => $request->Name,
            'Image' => $request->Image,
            'Description' => $request->Description,
        ]);
  
        return redirect()->route('category')->with('status','Category Updated Successfully');
       
    }
    public function delete_category(int $id){
        Category::destroy($id);
        return redirect()->route('category')->with('status','Category Removed');
    }
}
