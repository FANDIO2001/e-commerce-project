<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function view_category()
    {
        $data = Category::all();
       return view('admin.category',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function add_category(Request $request)
    {

       $category = new Category;

       $category->category_name = $request->category;
       $category->save();

       toastr()->closeButton()->timeOut(5000)->addSuccess('Category Added Successfully');

       return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function delete_category($id)
    {
       $data = Category::find($id);
       $data->delete();
       toastr()->closeButton()->timeOut(5000)->addSuccess('Category Deleted Successfully');
       return redirect()->back();

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_category($id)
    {
        $data = Category::find($id);
       return view('admin.edit_category',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_category(Request $request, $id)
    {
        $data = Category::find($id);
        $data->category_name = $request->category;
        $data->save();
        toastr()->closeButton()->timeOut(5000)->addSuccess('Category Updated Successfully');
        return redirect('view_category');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function add_product()
    {
        $category = Category::all();
     return view('admin.products.add_product',compact('category'));
    }

    public function create_product(Request $request){
        $product = new Product;
        $product->title = $request->title;
        $product->description = $request->description;
        $photo = $request->photo;
        if ($photo) {
           $imageName = time().'.'.$photo->getClientOriginalExtension();
           $request->photo->move('produts', $imageName);

           $product->photo =  $imageName;
        }
        $product->price = $request->price;
        $product->category = $request->category;
        $product->quantity = $request->quantity;



        $product->save();
        toastr()->closeButton()->timeOut(5000)->addSuccess('Product Added Successfully');
        return redirect()->back();
    }

    public function product_list(){
     //   $data = Product::paginate(3);

       // return view('admin.products.product_list',compact('data'));
       // dd($data);
       $data = Product::all();
     //  paginate(10);
       return view('admin.products.product_list', compact('data'));
    }
    public function delet_product($id){
       $data = Product::find($id);
       $data->delete();
       toastr()->closeButton()->timeOut(5000)->addSuccess('Product Deleted Successfully');
       return redirect()->back();
    }

    public function edite_product($id){
        $data = Product::find($id);
        return view('admin.products.edite_product',compact('data'));
    }

    public function update_product(Request $request,$id){
        $data = Product::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->photo = $request->photo;
        $data->price = $request->price;
        $data->category = $request->category;
        $data->quantity = $request->quantity;
        $data->save();
        toastr()->closeButton()->timeOut(5000)->addSuccess('Product Updated Successfully');
        return redirect('product_list');
    }

}
