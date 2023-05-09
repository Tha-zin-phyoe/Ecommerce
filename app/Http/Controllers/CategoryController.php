<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(7);
        return view('admin.category.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)

    {


        $request->validate([
            'name'=>'required',
            'slug'=>'required',
            'description'=>'required',
            'image'=>'required|image|mimes:png,jpg,jpeg',
            'title'=>'required',
            'keyword'=>'required',
            'descriptionmeta'=>'required',

        ]);
        $image = $request->image;
        $imageName=uniqid().' '.$image->getClientOriginalName();
        $image->storeAs("public/category_images",$imageName);
        Category::create([
            'name'=>$request->name,
            'slug'=>$request->name,
            'description'=>$request->name,
            'image'=>$imageName,
            'title'=>$request->title,
            'keyword'=>$request->keyword,
            'descriptionmeta'=>$request->descriptionmeta,
            'status'=>$request->status==true?'1':0
        ]);
        return redirect()->route('categories.index');
    }

    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
         $category = $category;
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            'name'=>'required',
            'slug'=>'required',
            'description'=>'required',
            'image'=>'required|image|mimes:png,jpg,jpeg',
            'title'=>'required',
            'keyword'=>'required',
            'descriptionmeta'=>'required',
        ]);
        if($request->hasFile('image')){
            $categoryImage=$category->image;
            File::delete('storage/category_images/'.$categoryImage);
            $image =$request->image;
            $imageName =uniqid().' '. $image->getClientOriginalName();
            $image->storeAs('category_images',$imageName);
            $data['image']=$imageName;
            $category->update($data);

        }
        else{
            $category->update($data);

        }

        return redirect('admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {

        $categoryImage =$category->image;
        File::delete('storage/category_images/'.$categoryImage);
        $category->delete();
        return redirect('admin/categories');
    }
}
