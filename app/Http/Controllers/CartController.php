<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string',
            'product_price' => 'required|numeric',
            'order_quantity' => 'required|integer|min:1',
            'productID' => 'required',
        ]);
    
        $cart = $request->session()->get('cart', []);
    
        // Check if the item is already in the cart based on productID
        $existingItemIndex = array_search($request->input('productID'), array_column($cart, 'productID'));
    
        if ($existingItemIndex !== false) {
            // Item already exists, update the quantity
            $cart[$existingItemIndex]['order_quantity'] += $request->input('order_quantity');
        } else {
            // Item not in the cart, add it as a new item
            $item = [
                'product_name' => $request->input('product_name'),
                'product_price' => $request->input('product_price'),
                'order_quantity' => $request->input('order_quantity'),
                'productID' => $request->input('productID'),
            ];
    
            $cart[] = $item;
        }
    
        $request->session()->put('cart', $cart);
    
        // Log success message
        Log::info('Item added to cart successfully.', ['item' => $item]);
    
        return response()->json(['success' => true, 'message' => 'Item added to cart successfully.']);
    }
    

    public function getCartCount(Request $request)
    {
        // Logic to get the cart count
        $cartCount = $request->session()->get('cart', []) ? count($request->session()->get('cart')) : 0;

        return response()->json($cartCount);
    }

    public function logout()
    {
        Auth::logout();

        // Clear the cart session
        session()->forget('cart');

        return redirect('/'); 
    }

    public function clearCart()
    {
        Auth::logout();
        // Clear the cart session
        session()->forget('cart');
    
        return response()->json(['message' => 'Cart successfully cleared']);
    }
    public function orderPlaced()
    {
        Auth::logout();
        // Clear the cart session
        session()->forget('cart');
    
        return redirect('/user-ordering-page')->with('success', 'Order Placed Successfully');

    }

    public function clearItem(Request $request, $productId)
    {
        // Retrieve the cart items from the session
        $cartItems = session('cart', []);

        // Find the index of the item with the given product ID
        $index = array_search($productId, array_column($cartItems, 'productID'));

        if ($index !== false) {
            // Remove the item from the cart
            array_splice($cartItems, $index, 1);

            // Update the cart in the session
            session(['cart' => $cartItems]);

            return response()->json(['message' => 'Item removed from the cart.']);
        }

        return response()->json(['message' => 'Item not found in the cart.'], 404);
    }


    public function showCart(Request $request)
    {
        try {
            Log::info('Session Data:', ['cart' => $request->session()->get('cart', [])]);

        } catch (\Exception $e) {
        }
    }      
}
