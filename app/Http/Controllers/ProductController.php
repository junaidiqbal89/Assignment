<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function index()
    { 

        $product = Product::all();
        return view('product.index',compact('product'));

    }
    public function create()
    { 
        
        return view('product.create');

    }
    public function store(Request $request)
    { 
        // $product = Product::create([
        //     'name' => $request->name,
            
        // ]);
        $product = new Product();
        if($request->has('profile_image'))
        {
            $file= $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/products/',$filename);
            $product->profile_image =$filename;
        }
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->status = $request->status;
            $product->save();
            return redirect()->back()->with('status','product image added');

    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit',compact('product'));
    }
    public function update(Request $request,$id)
    {
        $product = Product::find($id);
        if($request->hasfile('profile_image'))
        {
            $destination = 'uploads/products/'.$product->profile_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file= $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/products/',$filename);
            $product->profile_image =$filename;
        }
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->status = $request->status;
            $product->update();
            return redirect()->back()->with('status','product data added successfully');
    }
    public function destroy($id)
    {
            $product = Product::find($id);
            $product->delete();
            return redirect()->back()->with('status','product data delete successfully');
    }
}    
