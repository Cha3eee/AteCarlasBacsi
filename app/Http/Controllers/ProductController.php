<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;


class ProductController extends Controller
{

    //Add Product
    
    public function store(Request $request){
        $validated = $request->validate([
            'productID' => 'required',
            'product_name' => 'required',
            'product_category' => 'required',
            'product_price' => 'required',
            'product_quantity' => 'required',
            'product_desc' => 'required',
            'product_image' => 'required|image|mimes:jpeg,png,jpg',
        ]);
    
        // Handle file upload
        if ($request->hasFile('product_image') && $request->file('product_image')->isValid()) {
            $file = $request->file('product_image');
            if (is_file($file->getPathname())) {
                $validated['product_image'] = file_get_contents($file->getRealPath());
            } else {
                return redirect()->back()->with('error', 'Invalid file.');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid file upload.');
        }
    
        // Create the product
        try {
            Products::create($validated);
        } catch (\Exception $e) {
            // Log the error or display it for debugging
            dd($e->getMessage());
            return redirect()->back()->with('error', 'Product creation failed. Please try again.');
        }
    
        return redirect('/admin-dashboard#dashboard');
    }
    
    

    //View per Products

    public function viewProduct($prodID)
    {
        $product = Products::where('productID', $prodID)->first();

        return view('Admin.admin-products-perpage', ['products' => $product]);
    }

    public function ProductInfo()
    {
        $silogInfo = Products::where('product_category', 'Silog')->get();
        $sandwichesInfo = Products::where('product_category', 'Sandwiches')->get();
        $muncheeseInfo = Products::where('product_category', 'Muncheese')->get();
        $dessertsInfo = Products::where('product_category', 'Desserts')->get();

        return view("User.user-ordering-page", ['silogs' => $silogInfo, 'sandwiches' => $sandwichesInfo, 'muncheese' => $muncheeseInfo,
         'desserts' => $dessertsInfo]);
    }

    //Product Edit
    public function productEdit(Request $request, $prodID)
    {
        $request->validate([
            'product_name' => 'required',
            'product_quantity' => 'required|numeric',
            'product_price' => 'required',
            'product_desc' => 'required',
            // Add other validation rules as needed
        ]);
    
        $products = Products::where('productID', $prodID)->first();
    
        if (!$products) {
            return response()->json(['message' => 'Product not found'], 404);
        }
    
        // Update the attributes based on the request data
        $products->update([
            'product_name' => $request->input('product_name'),
            'product_quantity' => $request->input('product_quantity'),
            'product_price' => $request->input('product_price'),
            'product_desc' => $request->input('product_desc'),
            // Add other fields as needed
        ]);
    
    }
    
    //Product Delete

    public function productDelete($prodID)
    {
        $products = Products::where('productID', $prodID)->first();
        $products->delete();

        return redirect('/admin-dashboard#dashboard');
    }

    



    

    

}
// public function store(Request $request){
//     $validated = $request->validate([
//         'productID' => 'required',
//         'product_name' => 'required',
//         'product_category' => 'required',  // Assuming this is the field for product category
//         'product_price' => 'required',
//         'product_quantity' => 'required',
//         'product_desc' => 'required',
//         'product_image' => 'required|image|mimes:jpeg,png,jpg',
//     ]);

//     // Extract the correct value for product_category
//     $validated['product_category'] = $request->input('product_category');

//     // Handle file upload
//     if ($request->hasFile('product_image')) {
//         $validated['product_image'] = file_get_contents($request->file('product_image')->getRealPath());
//     }

//     // Create the product
//     Products::create($validated);

//     return redirect('/admin-dashboard#dashboard');
// }