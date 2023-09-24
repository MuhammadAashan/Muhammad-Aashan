<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\File;

class ProductController extends Controller
{
     // dislay product in cards
      public function index()
       {
           $products = Product::paginate(5); // You can adjust the number of products per page
           return view('products.productcard', compact('products'));
       }



       // Display all products in a paginated manner
       public function displayProduct()
       {
           $products = Product::paginate(5); // You can adjust the number of products per page
           return view('products.product', compact('products'));
       }



       // Display a form to create a new product
       public function create()
       {
           return view('products.createform');
       }



       // Store the submitted product data in the database
       public function store(Request $request)
       {
           $validatedData = $request->validate([
               'name' => 'required|string|max:255',
               'description' => 'required|string',
               'price' => 'required|numeric',
               'quantity' => 'required|integer',
               'productimage' => 'required|image|mimes:jpeg,png,jpg,gif',
           ]);

           // Handle image upload and store it in the 'public' disk
           if ($request->hasFile('productimage')) {
            $image= $request->file('productimage');
            $filename = uniqid() . '_' . $image->getClientOriginalName();
            $path= $request->file('productimage')->storeAs('public/images',$filename);
            $validatedData['image'] = 'images/'.$filename;
           }


           Product::create($validatedData);

           $products = Product::paginate(5); // You can adjust the number of products per page
           return view('products.product', compact('products'));
       }



       // function to edit product
       public function edit($id)
       {
        $products = Product::findOrFail($id); // Retrieve the product by ID
        return view('products.editform', compact('products'));
       }



       // function to update product
       public function update(Request $request, $id)
       {
           $validatedData = $request->validate([
               'name' => 'required|string|max:255',
               'description' => 'required|string',
               'price' => 'required|numeric',
               'quantity' => 'required|integer',
           ]);

           $product = Product::findOrFail($id); // Retrieve the product by ID
           $product->update($validatedData); // Update the product with new data


           $products = Product::paginate(5); // You can adjust the number of products per page
           return view('products.product', compact('products'));
       }



       //function to delete product
       public function destroy($id)
       {
        $product = Product::findOrFail($id); // Retrieve the product by ID
        $product->delete(); // Delete the product

        $products = Product::paginate(5); // You can adjust the number of products per page
        return view('products.product', compact('products'));
     }





}
