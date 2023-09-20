<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $categories = Category::latest()->get();

        //dd($categories);
        return view('backend.categories.index', [
            'categories' => $categories
        ]);
    }

    public function create(){
        return view('backend.categories.create');
    }

    public  function store(Request $request){
        try{
            $request->validate([
                'title' => ['required','min:5'],
                'description' => ['required', 'min:10']
            ]);
    
            Category::create([
                'title' => $request->title,
                'description' => $request->description
            ]);
    
            return redirect()->route('categories.index')->with('message', 'Task is successfully stored!');

        }catch(QueryException $e){
            return redirect()->back()->withErrors($e->getMessage());
            

        }

        
    }

    public function show(Category $category){
        //dd($id);
        // $category = Category::findorFail($id);
        // dd($category);

        return view('backend.categories.show',[
            'category'=>$category
        ]);
    }
    
}
